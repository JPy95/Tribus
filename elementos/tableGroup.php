<?php

  clearstatcache();
  include_once('php/Conexao/Conexao.php');
  $conexao = new Conexao();
  $con = $conexao->conectar();
  $projeto = $_GET['projeto'];
  $idAluno = $_GET['idAluno'];

  $query = 'SELECT p.qtdeAlunos, COUNT(a.idAluno) AS qtdRestante
            FROM projeto p
            INNER JOIN alunos a
            ON a.projeto = p.idtProjeto
            WHERE a.perfil IS NOT NULL AND a.projeto ='.$projeto;
  $stmt = $con->prepare($query);
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_OBJ);

  $restante = $row->qtdeAlunos - $row->qtdRestante;

  if($restante == 0){
    //Find Stundents
    $query = 'SELECT aluno, atuacao, perfil FROM grupos
              WHERE projeto = '.$projeto.' AND grupo IN (SELECT DISTINCT grupo FROM grupos WHERE idAluno = '.$idAluno.')';
    $stmt = $con->prepare($query);
    $stmt->execute();
    $student = $stmt->fetchAll();

    for($i=0;$i<count($student);$i++){
      echo '
        <tr>
          <td class="td-squad">'.$student[$i]["aluno"].'</td>
          <td class="td-squad">'.$student[$i]["atuacao"].'</td>
          <td class="td-squad">'.$student[$i]["perfil"].'</td>
        </tr>
      ';
    }
  }


?>

