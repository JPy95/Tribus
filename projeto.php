<!doctype html>
<html lang="pt-br">
    <head>
        <?php include_once('elementos\head.php')?>
        <link rel="stylesheet" type="text/css" href="style\projeto\projeto.css">
    </head>
    <body>
        <!-- Navbar -->
        <?php include_once('elementos\navbar.php')?>

        <!-- Conteudo -->
        <div class="conteudo-projeto">
            <div class="titulo-projeto">
                <h1>Informações do Projeto</h1>
                <div style="width: 100%;margin: 0 5%;align-items: center;">
                    <span>
                        Legal! Nos informe o tema do projeto e o curso dos alunos para que possam gerar os grupos de trabalho
                    </span>
                </div>
            </div>
            <div class="form-projeto">
                <form action="">
                    <div>
                        <label for="">Tema do Projeto:</label><br>
                        <input type="text">
                    </div>
                    <div class="select">
                        <label for="">Curso:</label><br>
                        <select name="" id="">
                            <option value="">Selecione uma opção.</option>
                            <option value="">Ciência da Computação</option>
                        </select>
                    </div>
                    <div class="btn-tribus">
                        <button class="btn_style-projeto">Criar Projeto</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Footer -->
        <?php include_once('elementos\footer.php')?>
    </body>
</html>