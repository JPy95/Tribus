<!doctype html>
<html lang="pt-br">
    <head>
        <?php include_once('elementos\head.php')?>
        <link rel="stylesheet" type="text/css" href="style\questionario\questionario.css">
        <link rel="stylesheet" type="text/css" href="style\modal\modal.css">
    </head>
        <!-- Navbar -->
        <?php include_once('elementos\navbar.php')?>
        
        <!-- Modal -->
        <?php include_once('elementos\modal.php')?> 

        <!-- Conteudo -->
        <div class="questionario">
            <h1>Questionário de Perfil Comportamental</h1>
            <form action="php\servicos\_questionario.php" method="post" class="form-quest">
                <?php include_once('elementos\quest.php')?> 
                <input type="hidden" name="nome" value="<?php echo $_GET['nome']?>">
                <input type="hidden" name="projeto" value="<?php echo $_GET['projeto']?>">
            </form>
        </div>

        <!-- Footer -->
        <?php include_once('elementos\footer.php')?>        
    </body>
</html>