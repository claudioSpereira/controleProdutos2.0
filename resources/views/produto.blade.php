<html>
<body>
<h1>Listagem de produtos</h1>
<table>
@foreach($produtos as $p)
<tr>
<td>{{ $p->prod_nome }}</td>
</tr>
@endforeach


</table>
