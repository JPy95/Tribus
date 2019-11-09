<?php

    include_once('../Conexao/Conexao.php');

    $conexao = new Conexao();

    //Variaveis
    $projeto = rand(10000, 99999);
    $tema = $_POST['tema'];
    $curso = $_POST['curso'];
    $unidade = $_POST['unidade'];
    $turno = $_POST['turno'];
    $totalAlunos = $_POST['qtdeAlunos'];
    
    //Inserindo dados no Banco
    $query="INSERT INTO projeto VALUES(null,'".$tema."','".$curso."','".$unidade."','".$turno."',".$totalAlunos.",".$projeto.")";
    $con = $conexao->conectar();
    $stmt = $con->prepare($query);
    $stmt->execute();
    
    header("Location: ../../qrCodePage.php?projeto=".$projeto."&tema=".$tema."&totalAlunos=".$totalAlunos);
?>