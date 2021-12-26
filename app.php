<?php 

$conexao = new PDO('mysql:host=localhost;dbname=orcamentos', 'root', '');

$sql = 'SELECT * FROM "custos_fixos"';
$res = $conexao->prepare($sql);
$res->execute();

$result = $res->fetchAll(PDO::FETCH_OBJ);



