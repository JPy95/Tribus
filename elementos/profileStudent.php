<?php

  include_once('php/Conexao/Conexao.php');
  $conexao = new Conexao();
  $con = $conexao->conectar();

  $project = $_GET['projeto'];
  $idAluno = $_GET['idAluno'];

  //Busca dados do Aluno
  $query = "SELECT a.nome,a.atuacao,a.perfil,p.analista,p.comunicador,p.planejador,p.executor
            FROM alunos a 
            INNER JOIN perfil p ON a.idAluno = p.idAluno AND a.projeto = p.projeto
            WHERE a.idAluno =".$idAluno." AND a.projeto = ".$project;

  $stmt = $con->prepare($query);
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_OBJ);

  echo '
    <div id="container">
      <div id="title">
        <h2>Perfil Comportamental</h2>
      </div>
      <h5>'.$row->nome.' - '.$row->atuacao.'</h5>
      <div style=" display: flex; justify-content: center;margin-top: 25px;">
        <div style=" margin-right: 5px; padding-right: 5px; border-right: 1px solid;">
          <span style="font-size: 14px;font-weight: 500;">Analista: </span>
          <label style="font-size: 14px;font-weight: 500;">'.$row->analista.'</label><br>
          <span style="font-size: 14px;font-weight: 500;">Comunicador: </span>
          <label style="font-size: 14px;font-weight: 500;">'.$row->comunicador.'</label><br>
          <span style="font-size: 14px;font-weight: 500;">Planejador: </span>
          <label style="font-size: 14px;font-weight: 500;">'.$row->planejador.'</label><br>
          <span style="font-size: 14px;font-weight: 500;">Executor: </span>
          <label style="font-size: 14px;font-weight: 500;">'.$row->executor.'</label><br>
        </div>
        <div style="text-align: center;">
          <span style="font-size: 14px;font-weight: 500;">Seu perfil predominante é:</span><br>
          <label style="font-size: 20px;font-weight: 500;color: #cf1717;margin-top: 13%;">'.$row->perfil.'</label>
        </div>
      </div>
    </div>
  ';

?>