<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
    'tipo_id',
    'funcionario_id',
    'prod_nome',
    'prod_patrimonio',
    'prod_serie',
    'prod_marca',
    'prod_modelo',
    'prod_status',
    'prod_garantia'
    ];

    public function tipos()
     {
     return $this->belongsTo('App\Tipo','tipo_id');
     }
   public function funcionarios()
    {
    return $this->belongsTo('App\Funcionario','funcionario_id');
    }
}
