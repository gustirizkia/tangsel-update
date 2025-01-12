<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\ArtikelKategori;
use App\Models\ArtikelRekomendasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $terkini = Artikel::orderBy("id", "desc")->limit(4)->get();

        $firstKategori = ArtikelKategori::orderBy("id", "asc")
            ->has("artikel")
            ->first();

        $firstArtikel = Artikel::where("kategori_id", $firstKategori->id)->limit(8)->get();

        $lastKategori = ArtikelKategori::orderBy("id", "desc")
            ->has("artikel")
            ->first();

        $lastArtikel = Artikel::where("kategori_id", $lastKategori->id)->limit(12)->get();

        $rekomendasi = Cache::remember("artikel_rekomendasi", 60 * 60, function () {
            return ArtikelRekomendasi::orderBy("id", "asc")
                ->with("artikel")
                ->get();
        });

        return view("welcome", [
            'terkini' => $terkini,
            "firstArtikel" => $firstArtikel,
            "firstKategori" => $firstKategori,
            "lastArtikel" => $lastArtikel,
            "lastKategori" => $lastKategori,
            "rekomendasi" => $rekomendasi
        ]);
    }
}
