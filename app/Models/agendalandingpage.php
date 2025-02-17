<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class agendalandingpage extends Model
{
    use HasFactory;

    protected $table = 'agenda';

    protected $fillable = ['title', 'description', 'image', 'imgcard1', 'imgcard2', 'titlecard1', 'titlecard2', 'descriptioncard1', 'descriptioncard2'];
}
