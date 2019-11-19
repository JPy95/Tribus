<?php
    clearstatcache();
    include_once('../Conexao/Conexao.php');
    $conexao = new Conexao();

    //Variaveis
    $dataInclusão = date("Y-m-d H:i:s");
    $idtAluno = mt_rand(0, 999999);
    $name = $_POST['nome'];
    $projeto = $_POST['projeto'];
    $atuacao = $_POST['atuacao'];

    //inserindo aluno no bd
    $query = "INSERT INTO alunos VALUES('".$dataInclusão."',null,'".$name."',".$projeto.",'".$atuacao."',null,".$idtAluno.")";
    $con = $conexao->conectar();
    $stmt = $con->prepare($query);
    $stmt->execute();


    //Busca idAluno
    $query = "select idAluno from alunos where dtaInclusao = '".$dataInclusão."' and idtAluno = ".$idtAluno;
    $con = $conexao->conectar();
    $stmt = $con->prepare($query);
    $stmt->execute();
    $idAluno = intval($stmt->fetch(PDO::FETCH_OBJ)->idAluno);

    header("Location: ../../questionario.php?projeto=".$projeto."&idAluno=".$idAluno);
?>