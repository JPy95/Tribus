<?php
    clearstatcache();
    include_once('../Conexao/Conexao.php');
    $conexao = new Conexao();
    $con = $conexao->conectar();

    //Armazena as variaveis
    $projeto = $_GET['projeto'];
    $totalAluno = $_GET['totalAluno'];
    
    //Quantidade de Alunos
    $query = "SELECT COUNT(*) AS qtde from alunos WHERE projeto = ".$projeto." AND perfil IS NOT NULL";
    $stmt = $con->prepare($query);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_OBJ);
    $qtdeAlunos = $totalAluno - $row->qtde;

    echo $totalAluno;
?>