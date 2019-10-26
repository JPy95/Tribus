<?php

    include_once('../Conexao/Conexao.php');
    $conexao = new Conexao();

    //Variaveis
    $idAluno = rand(10000, 99999);
    $name = $_POST['nome'];
    $projeto = $_POST['projeto'];
    $atuacao = $_POST['atuacao'];

    //inserindo aluno no bd
    $query = "INSERT INTO alunos VALUES(now(),$idAluno,'".$name."',".$projeto.",'".$atuacao."',null,null)";
    $con = $conexao->conectar();
    $stmt = $con->prepare($query);
    $stmt->execute();

    header("Location: ../../questionario.php?aluno=true&projeto=".$projeto."&idAluno=".$idAluno);
?>