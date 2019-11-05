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
                        $aux .= 'd=tribusgroup.hostingerapp.com/questionario.php?projeto='.$_GET['projeto'].'&';
                        $aux .= 'e=H&';
                        $aux .= 's=10&';
                        $aux .= 't=J';
                    ?>
                    <img src="<?php echo $aux?>" class="img-mobile">
                </div>
                <div class="resumoQrcode">
                    <span>Código do Projeto: </span><label><?php echo $_GET['projeto']?></label><br>
                    <span>Quantidade de Alunos: </span><label><?php 
                        if(!isset($_GET['qtdeAlunos'])){
                            echo 0;
                        } else{
                            echo $_GET['qtdeAlunos'];
                        }?></label><br>
                </div>
            </div>
        </div>
    </body>
</html>