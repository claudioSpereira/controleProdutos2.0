<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
class ControllerProdutos extends Controller
{
  public function produto(){
    
    $produtos = Produto::all();
    return view('produto',['produtos'=>$produtos]);
  }
}
