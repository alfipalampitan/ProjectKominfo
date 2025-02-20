<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class berita extends Model
{
    use HasFactory;

    protected $table = 'berita';
    protected $fillable = ['title', 'description', 'image', 'link', 'is_trending'];



    protected static function booted()
    {
        static::deleted(function () {
            DB::statement('ALTER TABLE berita AUTO_INCREMENT = (SELECT IFNULL(MAX(id), 0) + 1 FROM berita)');
        });
    }
}
