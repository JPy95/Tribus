<?php

    include_once('..\Conexao\Conexao.php');
    $conexao = new Conexao();

    //Variaveis
    $name = $_POST['nome'];
    $projeto = $_POST['projeto'];
    $atuacao = $_POST['atuacao'];

    $query = "INSERT INTO exemplo VALUES(null,".$projeto.",'".$name."','".$atuacao."',null)";

    header("Location: ../../questionario.php?aluno=true&projeto=".$projeto."&nome=".$name);

    //$con = $conexao->conectar();

    //$stmt = $con->prepare($query);
    //$stmt->execute();
?>