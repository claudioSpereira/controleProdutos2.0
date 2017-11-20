<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
  protected $fillable = [
    'tipo_nome',
    'tipo_qntd'
  ];

  public function produtos()
  {
    return $this->hasMany('App\Produto');
  }
}
