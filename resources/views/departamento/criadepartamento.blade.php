
@extends('layouts.app')

@section('content')

 <div class="container">
 <h1>Novo Departamento</h1>

 @if ($errors->any())
 <ul class="alert alert-warning">
 @foreach($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 @endif

 {!! Form::open(['url'=>'/salvadepartamento']) !!}

 <!-- Nome Form Input -->
 <div class="form-group">
 {!! Form::label('dep_nome', 'Nome Departamento:') !!}
 {!! Form::text('dep_nome', null, ['class'=>'form-control']) !!}
 </div>

 <!-- Descricao Form Input -->

 <div class="form-group">
 {!! Form::submit('Criar Departamento', ['class'=>'btn btn-primary']) !!}
 </div>

 {!! Form::close() !!}

 </div>
 @endsection
