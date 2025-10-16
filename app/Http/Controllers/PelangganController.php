<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PelangganController extends Controller
{
    public function beranda()
    {
        $response = Http::get('http://127.0.0.1:8000/api/products');

        $produk = $response->successful() ? $response->json() : [];
        $produk = collect($produk)->sortByDesc('created_at')->take(4);

        return view('beranda.index', compact('produk'));
    }

    public function keranjang()
    {
        return view('keranjang.index');
    }

    public function format()
    {
        return view('format.index');
    }

    public function produkLengkap()
    {
        $response = Http::get('http://127.0.0.1:8000/api/products');

        $produk = $response->successful() ? $response->json() : [];
        return view('produk.index', compact('produk'));
    }

    public function kirim(Request $request)
    {
        Log::info("Pesanan diterima di pelanggan:", $request->all());

        $nama_pembeli = $request->nama_pembeli;
        $telepon = preg_replace('/\D/', '', $request->telepon);
        $alamat       = $request->alamat;

        // kalau 0 didepan, ubah jd 62
        if (substr($telepon, 0, 1) === '0') {
            $telepon = '62' . substr($telepon, 1);
        }
        // kalau 8 didepan, tambahin 62 didepan
        else if (substr($telepon, 0, 1) === '8') {
            $telepon = '62' . $telepon;
        }
        // kalau _62, hapus +nya
        else if (substr($telepon, 0, 3) === '+62') {
            $telepon = substr($telepon, 1);
        }

        $kodePesanan = 'PESN-' . date('dm') . '-' . date('Hi') . '-' . Str::upper(Str::random(3));

        foreach ($request->produk as $p) {
            Log::info("Kirim request reduce stock ke admin:", [$p]);

            $response = Http::put("http://127.0.0.1:8000/api/products/{$p['id']}/reduce-stock", [
                "qty" => $p['qty']
            ]);

            if ($response->successful()) {
                Log::info("Stok berhasil dikurangi:", $response->json());

                $pesananResponse = Http::post("http://127.0.0.1:8000/api/pesanan/API", [
                    "kode_pesanan" => $kodePesanan,
                    "kode_produk"  => $p['id'],
                    "jumlah"       => $p['qty'],
                    "nominal"      => $p['qty'] * $p['harga'],
                    "nama_pembeli" => $nama_pembeli,
                    "telepon"      => $telepon,
                    "alamat"       => $alamat
                ]);

                if ($pesananResponse->successful()) {
                    Log::info("Pesanan berhasil masuk:", $pesananResponse->json());
                } else {
                    Log::error("Gagal insert pesanan:", [
                        'status' => $pesananResponse->status()
                        // 'body'   => $pesananResponse->body(),
                    ]);
                }
            }

            Log::info("Response dari admin:", ['data' => $response->json()]);
        }

        return back()->with('success', 'Pesanan terkirim ke admin via WhatsApp!');
    }


    private function apicall($no_hp, $pesan)
    {
        $client = new Client();
        $url = 'https://apiwa.smkpgriwlingi.sch.id/api/sendBulkMessage';

        $data = [
            'apiKey'  => env('WHAPI_KEY', 'f60d05297f0af62109d4ec9ec274bd32'),
            'phone'   => [$no_hp],
            'message' => $pesan,
            'delay'   => 1,
        ];

        try {
            $response = $client->post($url, ['form_params' => $data]);
            Log::info('WA API response: ' . $response->getBody());
        } catch (\Exception $e) {
            Log::error('WA API error: ' . $e->getMessage());
        }
    }


    public function startService()
    {
        $client = new \GuzzleHttp\Client();
        $url = 'https://apiwa.smkpgriwlingi.sch.id/api/serviceStart';

        $data = [
            'apiKey' => env('WHAPI_KEY', 'f60d05297f0af62109d4ec9ec274bd32'),
        ];

        try {
            $response = $client->post($url, ['form_params' => $data]);
            $body = json_decode($response->getBody(), true);

            // log hasil
            Log::info('Service start response: ' . $response->getBody());

            // kalau sukses, bisa aja redirect sambil kasih pesan
            if (isset($body['code']) && $body['code'] == 200) {
                return back()->with('success', 'WA Service berhasil dihidupkan!');
            }

            return back()->with('error', 'Gagal start service: ' . $response->getBody());
        } catch (\Exception $e) {
            Log::error('Error starting WA service: ' . $e->getMessage());
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
