<?php

include_once('php/Conexao/Conexao.php');
$conexao = new Conexao();
$con = $conexao->conectar();

$project = $_GET['projeto'];
$idAluno = $_GET['idAluno'];




?>