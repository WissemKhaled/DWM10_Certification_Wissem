<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
  public function instrus()
  {
    return $this->belongsToMany('App\Instru');
  }
}
