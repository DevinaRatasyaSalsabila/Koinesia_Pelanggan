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
        $alamat  = $request->alamat;

        // Normalisasi nomor telepon
        if (substr($telepon, 0, 1) === '0') {
            $telepon = '62' . substr($telepon, 1);
        } elseif (substr($telepon, 0, 1) === '8') {
            $telepon = '62' . $telepon;
        } elseif (substr($telepon, 0, 3) === '+62') {
            $telepon = substr($telepon, 1);
        }

        $kodePesanan = 'PESN-' . date('dm') . '-' . date('Hi') . '-' . Str::upper(Str::random(3));

        $detailPesanan = "";
        $totalHarga = 0;

    //      $pembeli = DB::table('pembeli')->where('no_hp', $request->no_hp)->first();

    // if (!$pembeli) {
    //     $idPembeli = DB::table('pembeli')->insertGetId([
    //         'nama_pembeli' => $request->nama_pembeli,
    //         'no_hp' => $request->no_hp,
    //         'alamat' => $request->alamat,
    //         'created_at' => now(),
    //         'updated_at' => now()
    //     ]);
    // } else {
    //     $idPembeli = $pembeli->id_pembeli;
    // }

        foreach ($request->produk as $p) {
            Log::info("Kirim request reduce stock ke admin:", [$p]);

            $response = Http::put("http://127.0.0.1:8000/api/products/{$p['id']}/reduce-stock", [
                "qty" => $p['qty']
            ]);

            if ($response->successful()) {
                Log::info("Stok berhasil dikurangi:", $response->json());

                $nominal = $p['qty'] * $p['harga'];
                $totalHarga += $nominal;

                // Tambah detail pesan untuk WhatsApp
                // $detailPesanan .= "- {$p['nama']} ({$p['qty']}x) = Rp " . number_format($nominal, 0, ',', '.') . "\n";

                $pesananResponse = Http::post("http://127.0.0.1:8000/api/pesanan/API", [
                    "kode_pesanan" => $kodePesanan,
                    "kode_produk"  => $p['id'],
                    "jumlah"       => $p['qty'],
                    "nominal"      => $nominal,
                    "nama_pembeli" => $nama_pembeli,
                    "telepon"      => $telepon,
                    "alamat"       => $alamat
                ]);

                if ($pesananResponse->successful()) {
                    Log::info("Pesanan berhasil masuk:", $pesananResponse->json());
                } else {
                    Log::error("Gagal insert pesanan:", [
                        'status' => $pesananResponse->status(),
                        'body'   => $pesananResponse->body(),
                    ]);
                }
            } else {
                Log::error("Gagal reduce stok produk {$p['id']}", [
                    'status' => $response->status(),
                    'body'   => $response->body(),
                ]);
            }
        }

        // ✅ Pesan WhatsApp (semua variabel udah defined)
        $pesan = "Halo *{$nama_pembeli}*, terima kasih sudah order di Azza Koi Farm 🐟✨\n\n"
            . "Kode Pesanan: *{$kodePesanan}*\n\n"
            . "Detail pesanan kamu:\n"
            . "{$detailPesanan}\n"
            . "Total: *Rp " . number_format($totalHarga, 0, ',', '.') . "*\n\n"
            . "Pesananmu sudah masuk dan akan segera diproses ya 👍";

        $this->apicall($telepon, $pesan);

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
