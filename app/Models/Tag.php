<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    public function articles()
    {
        return $this->belongsToMany(Artikel::class, 'artikel_tags');
    }


    public static function boot()
    {
        parent::boot();

        //while creating/inserting item into db
        static::creating(function ($model) {

            $model->slug = Str::slug($model->nama);
        });

        static::updating(function ($model) {
            $model->slug = Str::slug($model->nama);
        });
    }
}
