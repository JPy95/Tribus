<!doctype html>
<html lang="pt-br">
    <head>
        <?php include_once('elementos/head.php')?>
        <link rel="stylesheet" type="text/css" href="style/qrCode/qrCode.css">
    </head>
    <body>
        <!-- Conteudo -->
        <div class="body-qrCode">

            <h1>Projeto: <?php echo $_GET['tema']?></h1>

            <div class="conteudo-qrCode">
                <div class="qrCode">
                    <?php
                        $aux = 'qrCode/php/qr_img.php?';
                        $aux .= 'd=http://tribus.dx.am/startQuiz.php?projeto='.$_GET['projeto'].'&';
                        $aux .= 'e=H&';
                        $aux .= 's=10&';
                        $aux .= 't=J';
                    ?>
                    <img src="<?php echo $aux?>" class="img-mobile">
                </div>
                <div class="resumoQrcode">
                  <span>Código do Projeto: </span><label><?php echo $_GET['projeto']?></label><br>
                  <span>Restam responder </span><label id="aluno"><?php echo $_GET['totalAlunos'];?></label><span> alunos.</span><br>
                  <span style="font-size: 20px;margin-right: 10px;">Acesse o Quiz com: </span>
                  <label style="font-size: 20px;font-weight: 700;color: black;">bit.do/TribusQuiz</label>
                </div>
            </div>
        </div>
        <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
        <script>
            setInterval(function() {
              var aluno = document.getElementById('aluno');
              var projeto = window.location.search.substring(1).split('&')[0].split('=')[1];
              var totalAluno = window.location.search.substring(1).split('&')[2].split('=')[1];
              $.ajax({
                data: 'projeto='+projeto+'&totalAluno='+totalAluno,
                url: 'php/servicos/_qrCode.php?',
                method: 'GET', // or GET
                success: function(result){
                  aluno.innerHTML = result;
                  if(result==0){
                    window.location.replace("biuldSquad.php?projeto=".$projeto."&totalAlunos=".$totalAluno);
                  }
                }
              });
            }, 5000);
        </script>
    </body>
</html>