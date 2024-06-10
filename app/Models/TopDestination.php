<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopDestination extends Model
{
    use HasFactory;
    protected $table = 'top_destinations';
    protected $fillable = [ 
        
        'image',
        'country_name',
        'town',
    ];

}
