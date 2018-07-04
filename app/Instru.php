<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instru extends Model
{
  public function materials()
  {
     return $this->belongsTo('App\Material');
   }
}
