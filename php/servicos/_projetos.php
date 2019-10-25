<?php

    include_once('..\Conexao\Conexao.php');

    $conexao = new Conexao();

    //Variaveis
    $projeto = rand(10000, 99999);
    $tema = $_POST['tema'];
    $curso = $_POST['curso'];
    $unidade = $_POST['unidade'];
    $turno = $_POST['turno'];
    
    $query="INSERT INTO projeto VALUES(".$projeto.",'".$tema."','".$curso."','".$unidade."','".$turno."')";

    $con = $conexao->conectar();

    $stmt = $con->prepare($query);
    $stmt->execute();
    
    header("Location: ../../qrCodePage.php?projeto=".$projeto."&tema=".$tema);
?>