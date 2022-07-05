<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',

    ];
    public function blog()
    {
       return   $this->hasOne(Blog::class,'image_id','id');
    }
}