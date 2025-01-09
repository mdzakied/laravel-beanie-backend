<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory; // use factory if needed

    // Specify the table
    protected $table = 'articles';

    // Specify filable columns
    protected $fillable = [
        'img',
        'title',
        'description'
    ];
}
