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
                
                <form action="" class="form-modal">
                    <div>
                        <label for="nome-modal" class="label-modal">Qual seu nome?</label><br>
                        <input type="text" class="input-modal" id="nome-modal" style="width: 98%;"><br>
                        <div style="display: flex;">
                            <div>
                                <label for="ra-modal" class="label-modal">Qual seu RA?</label><br>
                                <input type="text" class="input-modal" id="ra-modal"><br>
                            </div>
                            <div>
                                <label for="projeto-modal" class="label-modal">Qual o Código do Projeto?</label><br>
                                <input type="text" class="input-modal" id="projeto-modal"><br>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <label for="" class="label-modal">Qual a Área de Atuação que você deseja se especializar?</label><br>
                        <button class="btn btn-secondary dropdown-toggle select-quest" style="box-shadow: none;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Selecione uma opção
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Dados</a>
                            <a class="dropdown-item" href="#">Desenvolvimento/ Programação</a>
                            <a class="dropdown-item" href="#">Governânça</a>
                            <a class="dropdown-item" href="#">Infraestrutura</a>
                            <a class="dropdown-item" href="#">Negócios/ Projetos/ Comercial</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <label for="" class="label-modal">Qual a Profissão que você deseja se especializar?</label><br>
                        <button class="btn btn-secondary dropdown-toggle select-quest" style="box-shadow: none;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Selecione uma opção
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </form>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn-tribus" data-dismiss="modal">Ir para o questionário</button>
            </div>

        </div>
    </div>
</div>