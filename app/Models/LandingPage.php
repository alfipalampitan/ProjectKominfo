<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    use HasFactory;

    protected $table = 'landing_pages'; // Nama tabel di database

    protected $fillable = ['title', 'description', 'image'];
}
