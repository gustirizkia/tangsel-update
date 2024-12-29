<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function data(Request $request)
    {
        $artikel = Artikel::query();

        if ($request->kategori_id) {
            $artikel = $artikel->where("kategori_id", $request->kategori_id);
        }

        $artikel = $artikel->with("kategori")->paginate(18);


        foreach ($artikel as $key => $value) {
            $value->tanggal = Carbon::parse($value->created_at)->format("d M Y");
            $value->url = route("artikel-show", $value->slug);
        }

        return response()->json($artikel);
    }

    public function show($slug)
    {
        $artikel = Artikel::where("slug", $slug)->firstOrFail();
        $artikel->tanggal = Carbon::parse($artikel->created_at)->format("d M Y");

        return view("detail", [
            'artikel' => $artikel
        ]);
    }
}
