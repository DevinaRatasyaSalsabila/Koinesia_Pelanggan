<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

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
    // pastikan nomor buyer rapi (hapus 0 depan, tambah 62)
    $teleponBuyer = preg_replace('/^0/', '', $request->telepon);
    $teleponBuyer = "62" . $teleponBuyer;

    // pesan yang dikirim ke admin
    $pesan = "📦 Pesanan Baru:\n"
        . "👤 Nama: {$request->nama_penerima}\n"
        . "📞 Telepon: {$teleponBuyer}\n"
        . "🏠 Alamat: {$request->alamat}";

    // nomor admin
    $noAdmin = "6283871992564";

    // kirim WA ke admin
    $this->apicall($noAdmin, $pesan);

    return back()->with('success', 'Pesanan terkirim ke admin via WhatsApp!');
}

private function apicall($no_hp, $pesan)
{
    $client = new Client();
    $url = 'https://apiwa.smkpgriwlingi.sch.id/api/sendBulkMessage';

    $data = [
        'apiKey'  => env('WHAPI_KEY', 'f60d05297f0af62109d4ec9ec274bd32'),
        'phone'   => [$no_hp],   // kirim ke admin
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


    public function show(string $id)
    {
        //
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
