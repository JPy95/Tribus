<?php
  include_once('php/Conexao/Conexao.php');
  $conexao = new Conexao();

  $project = $_GET['project'];

  $conection = $conexao->conectar();
  $query = "select perfil, count(*) as qtde from alunos where projeto = ".$project." group by perfil";
  $stmt = $conection->prepare($query);
  $stmt->execute();
  $profiles = $stmt->fetchAll();

  echo "
      <script>
        var ctx = document.getElementsByClassName('pie');
        new Chart(ctx, {
          type: 'pie',
          data: {
            labels: ['".$profiles[0][0]."', '".$profiles[1][0]."', '".$profiles[2][0]."', '".$profiles[3][0]."'],
            datasets: [{
              backgroundColor: ['#3e95cd', '#8e5ea2','#3cba9f','#e8c3b9'],
              data: [".$profiles[0][1].",".$profiles[1][1].",".$profiles[2][1].",".$profiles[3][1]."]
            }]
          }
        });
      </script>
    ";

?>