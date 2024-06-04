<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = 'abouts';
    protected $fillable = [ 
        'top_content',
        'services',
        'mid_header',
        'mid_content',
        'image1',
        'image2',
    ];
}
