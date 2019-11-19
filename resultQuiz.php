<!doctype html>
<html lang="pt-br">
  <head>
    <?php include_once('elementos/head.php')?>
    <link rel="stylesheet" type="text/css" href="style/questionario/questionario.css">
    <link rel="stylesheet" type="text/css" href="style/modal/modal.css">
  </head>
  <body>
    <div id="container">
      <!-- Perfil -->
      <?php include_once('elementos/profileStudent.php')?>

      <script>
        setTimeout(function() {
          var qtdeAluno = document.getElementById('aluno'));
          var projeto = window.location.search.substring(1).split('&')[1].split('=')[1];
          $.ajax({
            data: 'projeto='+projeto,
            url: 'php/servicos/_findQtStudents.php?',
            method: 'GET', // or GET
            success: function(result){
              qtdeAluno.innerHTML = result;
              //alert(result);
            }
          });
        }, 5000);
      </script>
      <div style="text-align: center;margin-top: 25px;">
        <h6 style="margin: 0;">Aguarde, já confirmaremos o seu grupo</h6>
        <span style="font-size: 13px;font-weight: 500;">Restam responder </span>
        <label id="aluno" style="font-size: 16px;font-weight: 500;color: #cf1717;"> - </label>
        <span style="font-size: 13px;font-weight: 500;"> alunos</span>
      </div>

      <!-- Table Group -->
      <div id="tableGroup">
        <?php include_once('elementos/tableGroup.php')?>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
  </body>
</html>