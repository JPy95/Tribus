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
                <form action="php\servicos\_projetos.php" method="post">
                    <div>
                        <label for="">Tema do Projeto:</label><br>
                        <input type="text">
                    </div>
                    <div class="select">
                        <label for="">Curso:</label><br>
                        <select name="" id="">
                            <option value="">Selecione uma opção.</option>
                            <option value="">Ciências da Computação</option>
                            <option value="">Sistemas de Informações</option>
                            <option value="">Engenharia Elétrica</option>

                        </select>
                    </div>                    
                    <div class="select">
                        <label for="">Turma:</label><br>
                        <select name="" id="">
                        <option value="">Selecione uma opção.</option>
                            <option value="">CCP3AN-CMA1</option>
                            <option value="">SIN2BN-CMA</option>
                            <option value="">EEL7AN-CMA</option>
                        </select>
                    </div>
                    <div class="btn-projeto">
                        <button class="btn-tribus" type="submit">Criar Projeto</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Footer -->
        <?php include_once('elementos\footer.php')?>
    </body>
</html>