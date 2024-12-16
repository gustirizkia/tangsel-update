<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    use HasFactory;

    public static function boot()
    {
        parent::boot();

        //while creating/inserting item into db
        static::creating(function ($model) {

            $model->slug = Str::slug($model->nama);
        });
    }
}
