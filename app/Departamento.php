<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
  protected $fillable = [
    'dep_nome'
  ];

  public function produtos()
  {
    return $this->hasMany('App\Impressora');
  }
}
