<?php
  clearstatcache();
  include_once('../Conexao/Conexao.php');
  $conexao = new Conexao();
  $con = $conexao->conectar();
  $projeto = $_GET['projeto'];

  $query = 'SELECT p.qtdeAlunos, COUNT(a.idAluno) AS qtdRestante
            FROM projeto p
            INNER JOIN alunos a
            ON a.projeto = p.idtProjeto
            WHERE a.perfil IS NOT NULL AND a.projeto ='.$projeto;
  $stmt = $con->prepare($query);
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_OBJ);

  $restante = $row->qtdeAlunos - $row->qtdRestante;
  echo $restante;
?>