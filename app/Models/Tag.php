<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
      protected $fillable = [
        'page_name','title','description','key_words','robots','canonical','twitter_title',
        'twitter_description','twitter_card','twitter_site','ogsite_title','ogsite_name',
        'ogsite_description'



    ];
}