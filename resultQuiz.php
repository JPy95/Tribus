<!doctype html>
<html lang="pt-br">
  <head>
    <?php include_once('elementos/head.php')?>
    <link rel="stylesheet" type="text/css" href="style/questionario/questionario.css">
    <link rel="stylesheet" type="text/css" href="style/modal/modal.css">
    <link rel="stylesheet" type="text/css" href="style/managerSquad/managerSquad.css">
    <link rel="stylesheet" type="text/css" href="style/result/result.css">
  </head>
  <body>
    <div id="container">
      <!-- Perfil -->
      <?php include_once('elementos/profileStudent.php')?>
      <script>
        setTimeout(function() {
          var qtdeAluno = document.getElementById('aluno');
          var tableGroup = document.getElementById('tableGroup');
          var stack = document.getElementById('stack');
          var projeto = window.location.search.substring(1).split('&')[1].split('=')[1];
          $.ajax({
            data: 'projeto='+projeto,
            url: 'php/servicos/_findQtStudents.php?',
            method: 'GET', // or GET
            success: function(result){
              qtdeAluno.innerHTML = result;
              if(result == 0){
                stack.style.display = 'none';
                tableGroup.style.display = 'block';
              }
            }
          });
        }, 5000);
      </script>
      <div id="stack" style="text-align: center;margin-top: 25px; display:block">
        <h6 style="margin: 0;">Aguarde, já confirmaremos o seu grupo</h6>
        <span class="spanStack">Restam responder </span>
        <label id="aluno" class="labelStack"> - </label>
        <span class="spanStack"> alunos</span>
      </div>

      <!-- Table Group -->
      <div id="tableGroup" style="display:none;">
        <div class="tables">
          <h5>Este é seu Grupo</h5>
          <div class="areasTabela">
            <table class="table-squad">
              <tr>
                <th class="th-squad">Nomes</th>
                <th class="th-squad">Áreas de Atuações</th>
                <th class="th-squad">Perfis</th>
              </tr>
              <?php include_once('elementos/tableGroup.php')?>
            </table>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
  </body>
</html>