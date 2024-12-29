<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArtikelKategori extends Model
{
    use HasFactory;

    protected $hidden = ["id", "parent_id"];

    public function parent()
    {
        return $this->belongsTo(ArtikelKategori::class, "parent_id", "id");
    }
    public function child()
    {
        return $this->hasMany(ArtikelKategori::class, "parent_id", "id");
    }

    public function artikel()
    {
        return $this->hasMany(Artikel::class, "kategori_id", "id");
    }

    public static function boot()
    {
        parent::boot();

        //while creating/inserting item into db
        static::creating(function ($model) {

            $model->slug = Str::slug($model->nama);
        });
    }
}
