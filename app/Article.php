<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function Pages(){

        return $this->belongsTo(Page::class);

    }
}