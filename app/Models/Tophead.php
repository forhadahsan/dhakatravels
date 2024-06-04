<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tophead extends Model
{
    use HasFactory;
    protected $table = 'topheads';
    protected $fillable = [ 
        'email',
        'phone', 
    ];
}
