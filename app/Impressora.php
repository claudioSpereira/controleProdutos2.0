<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Impressora extends Model
{
  protected $fillable = [
  'departamento_id',
  'suprimento_id',
  'imp_nome',
  'imp_model',
  'imp_status'
  ];

  public function departamentos()
   {
   return $this->belongsTo('App\Departamento','departamento_id');
   }
 public function funcionarios()
  {
  return $this->belongsTo('App\Suprimentos','suprimentos_id');
  }
}
