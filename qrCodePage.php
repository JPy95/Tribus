<!doctype html>
<html lang="pt-br">
    <head>
        <?php include_once('elementos/head.php')?>
        <link rel="stylesheet" type="text/css" href="style/qrCode/qrCode.css">
        
        <script>
            setTimeout(function() {
                document.getElementById("projeto").submit();;
            }, 5000);
        </script>
    </head>
    <body>
        <form action="php/servicos/_qrCode.php" method="post" id="projeto">
            <input type="hidden" name="projeto" value="<?php echo $_GET['projeto']?>">
            <input type="hidden" name="tema" value="<?php echo $_GET['tema']?>">
            <input type="hidden" name="totalAlunos" value="<?php echo $_GET['totalAlunos']?>">
        </form>
        <!-- Conteudo -->
        <div class="body-qrCode">

            <h1>Projeto: <?php echo $_GET['tema']?></h1>

            <div class="conteudo-qrCode">
                <div class="qrCode">
                    <?php
                        $aux = 'qrCode/php/qr_img.php?';
                        $aux .= 'd=tribus.dx.am/startQuiz.php?projeto='.$_GET['projeto'].'&';
                        $aux .= 'e=H&';
                        $aux .= 's=10&';
                        $aux .= 't=J';
                    ?>
                    <img src="<?php echo $aux?>" class="img-mobile">
                </div>
                <div class="resumoQrcode">
                    <span>Código do Projeto: </span><label><?php echo $_GET['projeto']?></label><br>
                    <span>Restam responder </span><label><?php 
                        if(!isset($_GET['qtdeAlunos'])){
                            echo $_GET['totalAlunos'];
                        } else{
                            echo $_GET['qtdeAlunos'];
                        }?></label><span> alunos.</span><br>
                </div>
                <span style="font-size: 20px;margin-right: 10px;">Acesse o Quiz com: </span>
                <label style="font-size: 20px;font-weight: 700;color: black;">bit.do/tribusQuiz</label>
            </div>
        </div>
    </body>
</html>