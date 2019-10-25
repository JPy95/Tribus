<?php

    include_once('..\Conexao\Conexao.php');

    $conexao = new Conexao();



    //Variaveis
    $projeto = rand(10000, 99999);
    $tema = $_POST['tema'];
    $curso = $_POST['curso'];
    $unidade = $_POST['unidade'];
    $turno = $_POST['turno'];
    
    $query="INSERT INTO exemplo VALUES(".$projeto.",'".$tema."','".$curso."','".$unidade."','".$turno."')";

    header("Location: ../../qrCodePage.php?projeto=".$projeto."&tema=".$tema);
    
    //$con = $conexao->conectar();

    //$stmt = $con->prepare($query);
    //$stmt->execute();
?>