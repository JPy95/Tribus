<?php
    clearstatcache();
    include_once('../Conexao/Conexao.php');
    $conexao = new Conexao();
    $con = $conexao->conectar();

    $dataInclusão = date("Y-m-d H:i:s");
    $result = explode(",", $_POST['result']);
    $projeto = $_POST['projeto'];
    $idAluno = $_POST['aluno'];

    $result = array_count_values($result);

    $result['Analista'] =  $result['Analista']*4;
    $result['Comunicador'] = $result['Comunicador']*4;
    $result['Planejador'] = $result['Planejador']*4;
    $result['Executor'] = $result['Executor']*4;

    //insere perfil comportamental no banco
    $query="INSERT INTO perfil VALUES('".$dataInclusão."',NULL,".$idAluno.",".$projeto.",".$result['Analista'].",".$result['Comunicador'].", ".$result['Planejador'].", ".$result['Executor'].")"
    $stmt = $con->prepare($query);
    $stmt->execute();

    //buscando o pefil predominante do aluno
    $perfil = array_search(max($result), $result);
    //atualizando dados do aluno
    $query = "UPDATE alunos SET perfil = '".$perfil."' WHERE idAluno=".$idAluno;
    $stmt = $con->prepare($query);
    $stmt->execute();
?>