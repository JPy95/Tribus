<!doctype html>
<html lang="pt-br">
  <head>
    <?php include_once('elementos\head.php')?>
    <link rel="stylesheet" type="text/css" href="style\index\index.css">
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar-tribus navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-logo navbar-brand" href="#">
            <img src="img\Logo\Logo.png" width="75" height="75" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mr-3 ml-3 btn-collapse">
                <a href="#" class="navbar-buttons">Entrar em Projeto</a>
                <a href="projeto.html" class="navbar-buttons">Criar Projeto</a>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#quemSomos" role="button" aria-expanded="false" aria-controls="quemSomos">
                        Quem Somos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#comoFunciona" role="button" aria-expanded="false" aria-controls="comoFunciona">
                        Como Funciona
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#perfisComp" role="button" aria-expanded="false" aria-controls="perfisComp">
                        Perfis Compotamentais
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#perfisProf" role="button" aria-expanded="false" aria-controls="perfisProf">
                        Perfis Profissionais
                    </a>
                </li>
            </ul>
        </div>
    </nav>

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
    <footer class="bg-light" style="box-shadow: 0px 0px 5px 0px #0000001a;">
        <a class="footer-logo navbar-brand" href="#">
            <img src="img\Logo\Logo.png" width="200">
        </a>
        <div class="footer-mob">

            <div class="footer-links">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Criar Projeto<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Entrar em Projeto<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Quem Somos<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Como Funciona</a>
                    </li>
                </ul>
            </div>
            <div class="social-footer">
                <h5>Redes Sociais</h5>
                <ul class="icons-footer">
                    <li class="icon-footer">
                        <a href=""><img src="img\Icones\icons8-facebook-80.png" width="40"></a>
                    </li>
                    <li class="icon-footer">
                        <a href=""><img src="img\Icones\icons8-instagram-40.png" width="40"></a>
                    </li>
                    <li class="icon-footer">
                        <a href=""><img src="img\Icones\icons8-twitter-96.png" width="45"></a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>