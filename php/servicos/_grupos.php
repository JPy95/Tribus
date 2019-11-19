<?php
    clearstatcache();
    include_once('../Conexao/Conexao.php');
    include_once('../Grupos/Grupos.php');
    $conexao = new Conexao();
    
    $conection = $conexao->conectar();
    $qtdStudent = $_POST['totalAlunos'];
    $project = $_POST['projeto'];
    
    //Buscando dados dos alunos
    $query = "SELECT idAluno, nome, atuacao, perfil FROM alunos WHERE projeto =".$project;
    $stmt = $conection->prepare($query);
    $stmt->execute();
    $student = $stmt->fetchAll(); 

    $gourp = new Group($student,$project,$qtdStudent,$conection);

    if($gourp->biuldGroups()){
        header("Location: ../../configSquad.php?project=".$project);
    } 
?>