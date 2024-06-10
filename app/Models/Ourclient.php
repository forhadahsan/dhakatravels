<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ourclient extends Model
{
    use HasFactory;
    protected $table = 'ourclients';
    protected $fillable = [ 
        'image',
        'title',
        'client_name',
        'profeddion',
    ];
}
