<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory; // use factory if needed

    // Specify the table
    protected $table = 'comments';

    // Specify filable columns
    protected $fillable = [
        'comment',
        'name'
    ];
}
