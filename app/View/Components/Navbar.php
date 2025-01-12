<?php

namespace App\View\Components;

use App\Models\ArtikelKategori;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $kategori_artikel_navbar = Cache::remember('kategori_artikel_navbar', 40 * 60, function () {
            return ArtikelKategori::orderBy("nama", "asc")
                ->where("parent_id", null)
                ->with("child")
                ->get();
        });

        return view('components.navbar', compact("kategori_artikel_navbar"));
    }
}
