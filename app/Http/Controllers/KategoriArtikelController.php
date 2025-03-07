<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\ArtikelKategori;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KategoriArtikelController extends Controller
{
    public function index(Request $request, $slug, $child = null)
    {
        $kategori_slug = $child ?? $slug;
        $kategori = ArtikelKategori::where("slug", $kategori_slug)->firstOrFail();

        $artikel = Artikel::where("kategori_id", $kategori->id)->paginate(18);

        foreach ($artikel as $item) {
            $item->tanggal = Carbon::parse($item->created_at)->format("d M Y");
        }

        $artikelLainnya = Artikel::whereNotIn("id", $artikel->pluck("id")->toArray())
            ->inRandomOrder()
            ->limit(10)->get();

        return view("kategori", [
            'kategori' => $kategori,
            "artikel" => $artikel,
            "artikelLainnya" => $artikelLainnya
        ]);
    }
}
