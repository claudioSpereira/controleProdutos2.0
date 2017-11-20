<html>
<body>
<h1>Listagem de produtos</h1>
<table>
<?php foreach ($produtos as $p): ?>
<tr>
<td><?= $p->prod_nome ?></td>
<td><?= $p->prod_patrimonio ?></td>
<td><?= $p->funcionarios->fun_nome ?></td>
</tr>
<?php endforeach ?>
</table>
