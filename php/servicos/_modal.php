<?php

    include_once('../Conexao/Conexao.php');
    $conexao = new Conexao();

    //Variaveis
    $name = $_POST['nome'];
    $projeto = $_POST['projeto'];
    $atuacao = $_POST['atuacao'];

    //inserindo aluno no bd
    $query = "INSERT INTO alunos VALUES(now(),null,'".$name."',".$projeto.",'".$atuacao."',null,".$idAluno.")";
    echo $query;
    $con = $conexao->conectar();
    $stmt = $con->prepare($query);
    $stmt->execute();

    header("Location: ../../questionario.php?projeto=".$projeto."&idAluno=".$idAluno);
?>