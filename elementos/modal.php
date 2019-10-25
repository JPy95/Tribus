<!-- CSS -->
<link rel="stylesheet" type="text/css" href="style\modal\modal.css">
<!-- jquery -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- chamada da função Active Modal -->
<script type="text/javascript" src="js\activeModal.js"></script>

<div class="modal fade show" id="ExemploModalCentralizado" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header titulo-modal">
                <h5 class="modal-title" id="TituloModalCentralizado">Olá Alunx!</h5>
            </div>
            <div class="modal-body">
                <h6>Para que você possa ingressar em um projeto, precisamos de conhecer você melhor.</h6>
                <form action="php\servicos\_modal.php" method="post">
                    <div>
                        <label for="nome-modal" class="label-modal">Qual seu nome?</label><br>
                        <input type="text" class="input-modal" id="nome-modal" name="nome" style="width: 98%;"><br>
                        <div style="display: flex;">
                            <div>
                                <label for="projeto-modal" class="label-modal">Qual o Código do Projeto?</label><br>
                                <?php
                                    if(empty($_GET)){
                                        echo '<input type="text" class="input-modal" id="projeto-modal" name="projeto"><br>';
                                    } else {
                                        echo '<input type="text" class="input-modal" id="projeto-modal"  name="projeto" value='.$_GET['projeto'].'><br>';
                                    }
                                ?>
                                
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <label for="atuacao" class="label-modal">Qual a Área de Atuação que você deseja se especializar?</label><br>
                        <select name="atuacao" id="atuacao" class="input-modal">
                            <option value="0">Selecione uma opção.</option>
                            <option value="Dados">Dados</option>
                            <option value="Desenvolvimento">Desenvolvimento/ Programação</option>
                            <option value="Gorvernanca">Governânça</option>
                            <option value="Infraestrutura">Infraestrutura</option>
                            <option value="Negócios">Negócios/ Projetos/ Comercial</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn-tribus">Ir para o questionário</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>