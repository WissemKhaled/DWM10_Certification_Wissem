<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
  public function instrus()
  {
     return $this->hasMany('App\Instru');
   }
}
