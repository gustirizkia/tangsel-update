<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artikel extends Model
{
    use HasFactory;

    protected $hidden = ["id", "kategori_id"];

    protected $appends = ["url_image"];

    public function getUrlImageAttribute()
    {
        return url("storage/$this->image");
    }

    public function kategori()
    {
        return $this->belongsTo(ArtikelKategori::class, "kategori_id", "id");
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
