<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Textnomial extends Model
{
    use HasFactory;
        protected $fillable = [
        'name','image','message','status',
    ];

}