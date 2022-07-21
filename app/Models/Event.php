<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
      protected $fillable = [
        'image','title','event_Date','short_description','long_description','location'



    ];

}