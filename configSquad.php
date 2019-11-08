<!doctype html>
<html lang="pt-br">
    <head>
        <?php include_once('elementos/head.php')?>
        <link rel="stylesheet" type="text/css" href="style/managerSquad/managerSquad.css">
        <!-- Chart.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    </head>
    <body>
        <!-- Navbar -->
        <?php include_once('elementos/navbar.php')?>

        <!-- Conteudo -->
        <h3>Perfil da Turma</h3>
        <div class="managerSquad">
            <div class="dashSquad">
                <div>
                    <h5>Áreas de Atuações</h5>
                    <div class="areasTabela">
                        <table>
                          <tr>
                            <th>Áreas de Atuações</th>
                            <th>Alunos</th>
                            <?php include_once('elementos/tableAtuacao.php')?>
                          </tr>
                        </table>
                    </div>
                </div>
                <div>
                    <h5>Perfil Comportamental</h5>
                    <div class="pieGraph">
                      <canvas class="pie"></canvas>
                      <?php include_once('elementos/pieGraph.php')?>
                    </div>
                </div>
            </div>
            <div class='squads'>
                <h5>Grupos</h5>
                <div class="group-squad">
                    <?php include_once('elementos/groups.php')?>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <?php include_once('elementos/footer.php')?>
    </body>
</html>