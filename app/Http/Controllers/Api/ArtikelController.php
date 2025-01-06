<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function show($slug)
    {
        $item = Artikel::where("slug", $slug)
            ->with("kategori")
            ->first();

        $artikelTerkait = Artikel::where("kategori_id", $item->kategori_id)
            ->where("id", "!=", $item->id)
            ->limit(12)
            ->get();

        return response()->json([
            "data" => [
                "detail_artikel" => $item,
                "artikel_terkait" => $artikelTerkait
            ]
        ]);
    }
}
