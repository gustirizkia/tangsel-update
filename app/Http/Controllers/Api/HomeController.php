<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\ArtikelKategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $artikelTerbaru = Artikel::with("kategori")->limit(6)->get();
        $artikelNasional = Artikel::with("kategori")
            ->whereHas("kategori", function ($query) {
                return $query->where("nama", "Nasional");
            })
            ->limit(6)->get();
        $artikelTangerang = Artikel::with("kategori")
            ->whereHas("kategori", function ($query) {
                return $query->where("nama", "Tangerang");
            })
            ->limit(6)->get();

        return response()->json([
            "data" => [
                "artikel_tangerang" => $artikelTangerang,
                "artikel_nasional" => $artikelNasional,
                "artikel_terkini" => $artikelTerbaru,
            ],

        ]);
    }

    public function listKategori()
    {
        $data = ArtikelKategori::with("child")
            ->where("parent_id", null)
            ->get();

        return response()->json([
            "data" => $data
        ]);
    }
}
