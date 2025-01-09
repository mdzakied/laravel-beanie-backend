<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bean extends Model
{
    use HasFactory; // use factory if needed

    // Specify the table
    protected $table = 'beans';

    // Specify filable columns
    protected $fillable = [
        'img',
        'title',
        'subtitle',
        'description',
        'price',
        'arrived_at',
        'total_sales',
    ];

    // Specify the formatting for the column
    protected $casts = [
        'price' => 'decimal:2', 
        'arrived_at' => 'datetime',
        'total_sales' => 'integer',
    ];
}
