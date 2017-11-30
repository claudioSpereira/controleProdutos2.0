<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suprimentos extends Model
{
  protected $fillable = [
    'sup_nome',
    'sup_qntd'
  ];

  public function produtos()
  {
    return $this->hasMany('App\Impressora');
  }
}
