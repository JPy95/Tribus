<?php
  include_once('php/Conexao/Conexao.php');
  $conexao = new Conexao();

  $project = $_GET['project'];
  $conection = $conexao->conectar();
  
  //Find Stundents
  $query = "select grupo, aluno, atuacao, perfil from grupos where projeto =".$project;
  $stmt = $conection->prepare($query);
  $stmt->execute();
  $student = $stmt->fetchAll(); 
  //Find QtdeGroups and QtdeStudents
  $query = "select count(distinct grupo) as qtdeGroups, count(aluno) as qtdeStudents from grupos where projeto =".$project;
  $stmt = $conection->prepare($query);
  $stmt->execute();
  while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
    $qtdGroups = $row->qtdeGroups;
    $qtdStudents = $row->qtdeStudents;
  }
  
  
  //Biuld Tables
  $controle = 0;
  for($i=0;$i<$qtdGroups;$i++){
    if($controle<1){
      echo '<div class="groups">';
    }
    echo '<div class="tables">';
    echo '<span>Grupo '.($i+1).'</span>';
    echo '<table class="table-squad">';
    echo '<tr>
            <th class="th-squad">Nome</th>
            <th class="th-squad">Área</th>
            <th class="th-squad">Perfil</th>
          </tr>';
    for($j=0;$j<$qtdStudents;$j++){
      if(($i+1) == $student[$j]["grupo"]){
        echo '
          <tr>
            <td class="td-squad">'.$student[$j]["aluno"].'</td>
            <td class="td-squad">'.$student[$j]["atuacao"].'</td>
            <td class="td-squad">'.$student[$j]["perfil"].'</td>
          </tr>';
      }
    }
    echo '</table>';
    echo '</div>';
    $controle++;
    if($controle==2){
      $controle=0;
      echo '</div>';
    }
  }







/*
  //Build tables
  for($i=0;$i<$qtdGroups;$i++){
    echo '<div>';
    echo '<span>Grupo '.($i+1).'</span>';
    echo '<table class="table-squad">';
    echo '<tr>
            <th class="th-squad">Nome</th>
            <th class="th-squad">Área</th>
            <th class="th-squad" style="width: 25%;">Perfil</th>
          </tr>';
    for($j=0;$j<$qtdStudents;$j++){
      if(($i+1) == $student[$j]["grupo"]){
        echo '
          <tr>
            <td class="td-squad">'.$student[$j]["aluno"].'</td>
            <td class="td-squad">'.$student[$j]["atuacao"].'</td>
            <td class="td-squad">'.$student[$j]["perfil"].'</td>
          </tr>';
      }
    }
    echo '</table>';
    echo '</div>';
  }*/
?>