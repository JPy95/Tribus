<!doctype html>
<html lang="pt-br">
  <head>
    <?php include_once('elementos\head.php')?>
    <link rel="stylesheet" type="text/css" href="style\index\index.css">
  </head>
  <body>
    <!-- Navbar -->
    <?php include_once('elementos\navbarIndex.php')?>

    <!-- Conteudo -->
    <div class="conteudo-index">
        <div class="item-index" id="quemSomos">
            <img src="img\Logo\Logo.png" width="200" height="200" class="img-index">
            <div class="paragrafo-index">
                <h5>Quem somos</h5>
                <p>
                    Nunc consequat quam tortor, vitae porta ante ullamcorper ac. Nunc eu orci ac ante venenatis bibendum. 
                    Vivamus rhoncus sit amet quam a aliquam. In luctus luctus urna ac semper. Fusce nec faucibus mi. 
                    Sed nec sem sit amet purus fermentum consectetur. Praesent vitae eros vitae dolor consequat finibus. 
                    Curabitur viverra ipsum non magna accumsan, vitae suscipit lorem luctus. Fusce eu dignissim risus. 
                    Etiam fringilla sit amet risus vel venenatis.
                </p>
            </div>
        </div>
        <div class="item-index" id="comoFunciona">
            <img src="img\teste.png" class="imglon-index img-index" style="display: none;" width="200" height="168">
            <div class="paragrafo-index">
                <h5>Como Funciona</h5>
                <p>
                    Nunc consequat quam tortor, vitae porta ante ullamcorper ac. Nunc eu orci ac ante venenatis bibendum. 
                    Vivamus rhoncus sit amet quam a aliquam. In luctus luctus urna ac semper. Fusce nec faucibus mi. 
                    Sed nec sem sit amet purus fermentum consectetur. Praesent vitae eros vitae dolor consequat finibus. 
                    Curabitur viverra ipsum non magna accumsan, vitae suscipit lorem luctus. Fusce eu dignissim risus. 
                    Etiam fringilla sit amet risus vel venenatis.
                </p>
            </div>
            <img src="img\teste.png" class="imgl-index img-index" width="200" height="168">
        </div>
        <div class="item-index" id="perfisComp">
            <div>
                <img src="img\aguia.png" width="100" height="84" class="img_comp-index">
                <img src="img\gato.png" width="100" height="84" class="img_comp-index">
            </div>
            <div>
                <img src="img\tubarao.png" width="100" height="84" class="img_comp-index">
                <img src="img\lobo.png" width="100" height="84" class="img_comp-index">
            </div>
            <div class="paragrafo-index">
                <h5>Perfis Comportamentais</h5>
                <p>
                    Nunc consequat quam tortor, vitae porta ante ullamcorper ac. Nunc eu orci ac ante venenatis bibendum. 
                    Vivamus rhoncus sit amet quam a aliquam. In luctus luctus urna ac semper. Fusce nec faucibus mi. 
                    Sed nec sem sit amet purus fermentum consectetur. Praesent vitae eros vitae dolor consequat finibus. 
                    Curabitur viverra ipsum non magna accumsan, vitae suscipit lorem luctus. Fusce eu dignissim risus. 
                    Etiam fringilla sit amet risus vel venenatis.
                </p>
            </div>
        </div>
        <div class="item-index" style="border-bottom: none; padding-bottom: 0;" id="perfisProf">
            <div class="group_select-index">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle select-index" style="box-shadow: none;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Área de Atuação
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
                    <button class="btn btn-secondary dropdown-toggle select-index" style="box-shadow: none;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Profissões
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <div class="paragrafo-index" style="border-left: 1px solid #0000001a; padding-left: 23px;">
                <h5>Perfis Profissionais</h5>
                <p>
                    Nunc consequat quam tortor, vitae porta ante ullamcorper ac. Nunc eu orci ac ante venenatis bibendum. 
                    Vivamus rhoncus sit amet quam a aliquam. In luctus luctus urna ac semper. Fusce nec faucibus mi. 
                    Sed nec sem sit amet purus fermentum consectetur. Praesent vitae eros vitae dolor consequat finibus. 
                    Curabitur viverra ipsum non magna accumsan, vitae suscipit lorem luctus. Fusce eu dignissim risus. 
                    Etiam fringilla sit amet risus vel venenatis.
                </p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include_once('elementos\footer.php')?>
  </body>
</html>