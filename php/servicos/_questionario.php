<?php
    
    include_once('../Conexao/Conexao.php');
    $conexao = new Conexao();
    $con = $conexao->conectar();

    $result = explode(",", $_POST['result']);
    $projeto = $_POST['projeto'];
    $idAluno = $_POST['aluno'];

    $result = array_count_values($result);

    $result['Analista'] =  $result['Analista']*4;
    $result['Comunicador'] = $result['Comunicador']*4;
    $result['Planejador'] = $result['Planejador']*4;
    $result['Executor'] = $result['Executor']*4;

    //buscando o pefil predominante do aluno
    $perfil = array_search(max($result), $result);

    //atualizando dados do aluno
    $query = "UPDATE alunos SET perfil = '".$perfil."' WHERE idAluno=".$idAluno;
    $stmt = $con->prepare($query);
    $stmt->execute();

    //header("Location: ../../resultQuiz.php?result=".$result."&perfil=".$perfil);
?>