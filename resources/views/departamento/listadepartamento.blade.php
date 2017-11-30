
@extends('layouts.app')

@section('content')
<div class="container">
<h1>Listagem de Departamentos</h1>
<table>
@foreach($dep as $deps)
<tr>
<td>{{ $deps->dep_nome }}</td>
</tr>
@endforeach
</table>
</div>
 @endsection
