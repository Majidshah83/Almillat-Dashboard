<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
  protected $primaryKey = 'image_id';
     protected $fillable = [
        'title','content','tag','image_id',

    ];
     public function images()
    {
        return $this->belongsTo(Image::class,'image_id');
    }
}
