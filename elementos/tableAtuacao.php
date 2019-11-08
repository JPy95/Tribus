<?php

  include_once('php/Conexao/Conexao.php');
  
  $conexao = new Conexao();
  $project = $_GET['project'];
  
  $query = "select atuacao, count(*) as qtde from alunos where projeto = ".$project." group by atuacao";
  $conection = $conexao->conectar();
  $stmt = $conection->prepare($query);
  $stmt->execute();

  while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
    echo '
      <tr>
        <td>'.$row->atuacao.'</td>
        <td style="text-align: center;">'.$row->qtde.'</td>
      </tr>
    ';
  }
?>