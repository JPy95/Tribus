<?php
    
    include_once('../Conexao/Conexao.php');
    $conexao = new Conexao();
    $con = $conexao->conectar();

    $idQuestionario = rand(10000, 99999);
    $idAluno = $_POST['idaluno'];
    $projeto = $_POST['projeto'];

    $resp = array(  $_POST['1q'],$_POST['2q'],$_POST['3q'],$_POST['4q'],$_POST['5q'],
                    $_POST['6q'],$_POST['7q'],$_POST['8q'],$_POST['9q'],$_POST['10q'],
                    $_POST['11q'],$_POST['12q'],$_POST['13q'],$_POST['14q'],$_POST['15q'],
                    $_POST['16q'],$_POST['17q'],$_POST['18q'],$_POST['19q'],$_POST['20q'],
                    $_POST['21q'],$_POST['22q'],$_POST['23q'],$_POST['24q'],$_POST['25q'],
    );

    $resp = array_count_values($resp);

    $resp['analista'] =  $resp['analista']*4;
    $resp['comunicador'] = $resp['comunicador']*4;
    $resp['planejador'] = $resp['planejador']*4;
    $resp['executor'] = $resp['executor']*4;

    //inserindo questionaro no bd
    $query = "INSERT INTO questionario VALUES (".$idQuestionario.",".$idAluno.",".$resp['analista'].", ".$resp['comunicador'].",".$resp['planejador'].",".$resp['executor'].",".$projeto.")";
    $stmt = $con->prepare($query);
    $stmt->execute();

    //buscando o pefil predominante do aluno
    $perfil = array_search(max($resp), $resp);

    //atualizando dados do aluno
    $query = "UPDATE alunos SET perfil = '".$perfil."', idQuestionario=".$idQuestionario." WHERE idAulno=".$idAluno;
    $stmt = $con->prepare($query);
    $stmt->execute();

    header("Location: ../../index.php?quest=true");
?>