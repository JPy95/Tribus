<!doctype html>
<html lang="pt-br">
    <head>
        <?php include_once('elementos/head.php')?>
        <link rel="stylesheet" type="text/css" href="style/projeto/projeto.css">
    </head>
    <body>
        <!-- Navbar -->
        <?php include_once('elementos/navbar.php')?>

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
                <form action="php/servicos/_projetos.php" method="post">
                    <div>
                        <label for="tema">Tema do Projeto:</label><br>
                        <input type="text" name="tema" id="tema">
                    </div>
                    <div class="select_group-tribus">
                        <div style="margin-right: 15px; width: 200px;">
                            <label for="curso">Curso:</label><br>
                            <select name="curso" id="curso">
                                <option value="0">Selecione uma opção.</option>
                                <option value="Ciencia da Computacao">Ciências da Computação</option>
                                <option value="Sistema da Informacao">Sistemas da Informaçao</option>
                                <option value="GTI">Gestão de TI</option>

                            </select>
                        </div>
                        <div style="margin-right: 15px; width: 200px;">
                            <label for="unidade">Unidade:</label><br>
                            <select name="unidade" id="unidade">
                                <option value="0">Selecione uma opção.</option>
                                <option value="Buritis">Buritis</option>
                                <option value="Cristiano Machado">Cristiano Machado</option>
                                <option value="Lourdes">Lourdes</option>
                            </select>
                        </div>
                        <div style="margin-right: 15px; width: 200px;">
                            <label for="turno">Turno:</label><br>
                            <select name="turno" id="turno">
                                <option value="0">Selecione uma opção.</option>
                                <option value="Matutino">Matutino</option>
                                <option value="Vespertino">Vespertino</option>
                                <option value="Intergal">Integral</option>
                                <option value="Noturno">Noturno</option>
                            </select>
                        </div>
                        <div style="margin-right: 15px; width: 200px;">
                            <label for="qtdeAlunos">Quantidade de Alunos:</label><br>
                            <input type="number" name="qtdeAlunos" id="qtdeAlunos" max="100" min="4">
                        </div>
                    </div>                    
                    <div class="btn-projeto">
                        <button class="btn-tribus" type="submit">Criar Projeto</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Footer -->
        <?php include_once('elementos/footer.php')?>
    </body>
</html>