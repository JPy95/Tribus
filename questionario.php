<!doctype html>
<html lang="pt-br">
  <head>
    <?php include_once('elementos/head.php')?>
    <link rel="stylesheet" type="text/css" href="style/questionario/questionario.css">
    <link rel="stylesheet" type="text/css" href="style/modal/modal.css">
  </head>
  <body>
    <!-- Modal -->
    <?php include_once('elementos/modal.php')?> 
    <!-- Conteudo -->
    <div id='container'>
      <div id='quiz'></div>
      <div class="div-button">
        <button class='button' id='next'>Próximo</button>
        <button class='button' id='send'>Enviar</button>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
    <script type='text/javascript' src='js/quiz.js'></script>
  </body>
</html>