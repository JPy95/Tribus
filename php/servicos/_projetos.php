<?php

    include_once('..\Conexao\Conexao.php');

    $conexao = new Conexao();

    $query="insert into exemplo values(12313,'bost',8916)";


    $con = $conexao->conectar();

    $stmt = $con->prepare($query);
    $stmt->execute();
?>