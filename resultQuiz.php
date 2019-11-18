<!doctype html>
<html lang="pt-br">
  <head>
    <?php include_once('elementos/head.php')?>
    <link rel="stylesheet" type="text/css" href="style/questionario/questionario.css">
    <link rel="stylesheet" type="text/css" href="style/modal/modal.css">
  </head>
  <body>
    <!-- Conteudo -->
    <div id="container">
      <div id="title">
        <h2>Perfil Comportamental</h2>
      </div>
      <h5>João Pedro - Dados</h5>
      <div style=" display: flex; justify-content: center;margin-top: 25px;">
        <div style=" margin-right: 5px; padding-right: 5px; border-right: 1px solid;">
          <span style="font-size: 14px;font-weight: 500;">Analista: </span>
          <label style="font-size: 14px;font-weight: 500;"><?php echo $_GET["result['Analista']"]?></label><br>
          <span style="font-size: 14px;font-weight: 500;">Comunicador: </span>
          <label style="font-size: 14px;font-weight: 500;"><?php echo $_GET["result['Comunicador]"]?></label><br>
          <span style="font-size: 14px;font-weight: 500;">Planejador: </span>
          <label style="font-size: 14px;font-weight: 500;"><?php echo $_GET["result['Planejador']"]?></label><br>
          <span style="font-size: 14px;font-weight: 500;">Executor: </span>
          <label style="font-size: 14px;font-weight: 500;"><?php echo $_GET["result['Executor']"]?></label><br>
        </div>
        <div style="text-align: center;">
          <span style="font-size: 14px;font-weight: 500;">Seu perfil predominante é:</span><br>
          <label style="font-size: 20px;font-weight: 500;color: #cf1717;margin-top: 13%;">Planejador</label>
        </div>
      </div>
      <div style="text-align: center;margin-top: 25px;">
        <h6 style="margin: 0;">Aguarde, já confirmaremos o seu grupo</h6>
        <span style="font-size: 13px;font-weight: 500;">Restam responder </span>
        <label style="font-size: 16px;font-weight: 500;color: #cf1717;"> 20 </label>
        <span style="font-size: 13px;font-weight: 500;"> alunos</span>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
  </body>
</html>