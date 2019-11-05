<!doctype html>
<html lang="pt-br">
  <head>
    <?php include_once('elementos/head.php')?>
    <link rel="stylesheet" type="text/css" href="style/index/index.css">
  </head>
  <body onload="document.getElementById('grupos').submit();">
    <form id="grupos" action="php/servicos/_grupos.php" method="post">
        <input type="hidden" name="projeto" value="<?php echo $_GET['projeto']?>">
        <input type="hidden" name="qtde" value="<?php echo $_GET['qtde']?>">
    </form>
    <div style="display: flex;justify-content: center;margin-top: 125px;">
        <img src="img/Logo/logoGif.gif" style="width: 25%;">
    </div>
  </body>
</html>
