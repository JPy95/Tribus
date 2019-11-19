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
    <div id="title">
      <h2>Perfil Comportamental</h2>
    </div>
    <h5>'.$row->nome.'</h5>
    <h6>'.$row->atuacao.'</h6>
    <div style=" display: flex; justify-content: center;margin-top: 25px;">
      <div class="perfil">
        <span>Analista: </span>
        <label>'.$row->analista.'%</label><br>
        <span>Comunicador: </span>
        <label>'.$row->comunicador.'%</label><br>
        <span>Planejador: </span>
        <label>'.$row->planejador.'%</label><br>
        <span>Executor: </span>
        <label>'.$row->executor.'%</label><br>
      </div>
      <div class="predominante">
        <span>Seu perfil predominante é:</span><br>
        <label class="perfilProdominante">'.$row->perfil.'</label>
      </div>
    </div>
  ';

?>