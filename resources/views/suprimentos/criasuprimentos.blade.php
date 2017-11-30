@extends('layouts.app')

@section('content')

<div class="text-center">
  <img src="img/print.png" class="rounded" height="162px" width="172px" alt="Print image .PNG">
</div>
 <div class="container">
 <h1>Novo Suprimento</h1>

 @if ($errors->any())
 <ul class="alert alert-warning">
 @foreach($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 @endif


 {!! Form::open(['url'=>'/salvasuprimento]) !!}

 <!-- Nome Form Input -->
 <div class="form-group">
 {!! Form::label('sup_nome', 'Nome Suprimento:') !!}
 {!! Form::text('sup_nome', null, ['class'=>'form-control']) !!}
 </div>

 <!-- Nome Form Input -->
 <div class="form-group">
 {!! Form::label('sup_qntd', 'Quantidade Suprimento:') !!}
 {!! Form::text('sup_qntd', null, ['class'=>'form-control']) !!}
 </div>

 <!-- Descricao Form Input -->

 <div class="form-group">
 {!! Form::submit('Criar Departamento', ['class'=>'btn btn-primary']) !!}
 </div>

 {!! Form::close() !!}

 </div>
 @endsection
