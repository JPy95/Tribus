<!doctype html>
<html lang="pt-br">
    <head>
        <?php include_once('elementos\head.php')?>
        <link rel="stylesheet" type="text/css" href="style\qrCode\qrCode.css">
    </head>
    <body>
        <!-- Navbar -->
        <?php include_once('elementos\navbar.php')?>
        
        <!-- Conteudo -->
        <div class="body-qrCode">

            <h1>Projeto: <?php echo $_GET['tema']?></h1>

            <div class="conteudo-qrCode">
                <div class="qrCode">
                    <?php
                        $aux = 'qrCode/php/qr_img.php?';
                        $aux .= 'd=questionario.php?projeto='.$_GET['projeto'].'&';
                        $aux .= 'e=H&';
                        $aux .= 's=10&';
                        $aux .= 't=J';
                    ?>
                    <img src="<?php echo $aux?>" class="img-mobile">
                </div>
                <div class="resumoQrcode">
                    <span>Código do Projeto: </span><label><?php echo $_GET['projeto']?></label><br>
                    <span>Quantidade de Alunos: </span><label>17</label><br>
                    <div class="btn-qrCode">
                        <a href="#" class="link-tribus">Gerar Grupos</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include_once('elementos\footer.php')?>
    </body>
</html>