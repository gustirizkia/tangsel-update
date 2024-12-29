<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\ArtikelKategori;
use Illuminate\Http\Request;

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

        return view("welcome", [
            'terkini' => $terkini,
            "firstArtikel" => $firstArtikel,
            "firstKategori" => $firstKategori,
            "lastArtikel" => $lastArtikel,
            "lastKategori" => $lastKategori,
        ]);
    }
}
