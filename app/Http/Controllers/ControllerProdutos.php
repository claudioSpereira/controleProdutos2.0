<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Departamento;
use App\Suprimentos;
use App\Http\Requests\ProdutoRequest;
use Input;
use PDF;
use App;
class ControllerProdutos extends Controller
{

  // setor tratamento produto
  public function produto(){

    $produtos = Produto::all();
    return view('produto',compact('produtos'));
      }
  public function welcome(){

    return view('welcome');
  }
  public function cria_print(){

    return view('prints.print');
  }

  // setor tratamento departamento
  public function cria_departamento(){

    $dep =  Departamento::all();
    return view('departamento.criadepartamento');
  }

    public function salvadepartamento(ProdutoRequest $post)
    {
     $post = new Departamento;
     $post->dep_nome = strtoupper(Input::get('dep_nome'));
     $post->save();

     return redirect('/home');
   }
   public function listadepartamento(){

     $dep =  Departamento::all();
     return view('departamento.listadepartamento',compact('dep'));
   }

   // setor tratamento suprimentos
   public function criasuprimento(){

     $dep =  Suprimentos::all();
     return view('suprimentos.criasuprimentos');
   }
   public function salvasuprimento(ProdutoRequest $post)
   {
    $post = new Suprimentos;
    $post->sup_nome = strtoupper(Input::get('sup_nome'));
    $post->sup_qntd = strtoupper(Input::get('sup_qntd'));    
    $post->save();

    return redirect('/home');
  }

   // setor tratamento pdf
  public function pdf(){

    $produtos = Produto::all();
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadView('produto',['produtos'=>$produtos]);
    return $pdf->stream();

  }
}
