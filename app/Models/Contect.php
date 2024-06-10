<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contect extends Model
{
    use HasFactory;
    protected $table = 'contects';
    protected $fillable = [ 
        'sub_title',
        'address',
        'email',
        'phone',
    ];
}
