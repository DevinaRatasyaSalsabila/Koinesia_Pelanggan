<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

    public function store(Request $request)
    {
        //
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
