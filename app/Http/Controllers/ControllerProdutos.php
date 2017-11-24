<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use PDF;
use App;
class ControllerProdutos extends Controller
{
  public function produto(){

    $produtos = Produto::all();
    return view('produto',compact('produtos'));
      }
  public function welcome(){

    return view('welcome');
  }
  public function pdf(){

    $produtos = Produto::all();
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadView('produto',['produtos'=>$produtos]);
    return $pdf->stream();
    
  }
}
