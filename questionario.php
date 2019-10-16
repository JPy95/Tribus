<!doctype html>
<html lang="pt-br">
    <head>
        <?php include_once('elementos\head.php')?>
        <link rel="stylesheet" type="text/css" href="style\questionario\questionario.css">
    </head>
    <body>
        <!-- Navbar -->
        <?php include_once('elementos\navbar.php')?>

        <!-- Conteudo -->
        <div class="questionario">
            <div>
                <h1>Questionário de Perfil Comportamental</h1>
                <span class="span-quest">Selecione a area de atuação e profissão que deseja especializar</span>
                <div class="selects-quest">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle select-quest" style="box-shadow: none;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <button class="btn btn-secondary dropdown-toggle select-quest" style="box-shadow: none;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profissões
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </div>
            <form action="" class="form-quest">
                <div class="conjuto-perguntas">
                    <label class="perguntas">1- Eu sou...</label><br>
                        <input type="radio" name="1q" value="a" id="1qa" class="input-radio"><label for="1qa" class="label-resp">Idealista, criativo e visipnário</label><br>
                        <input type="radio" name="1q" value="c" id="1qc" class="input-radio"><label for="1qc" class="label-resp">Divertido, espiritual e benéfico</label><br>
                        <input type="radio" name="1q" value="p" id="1qp" class="input-radio"><label for="1qp" class="label-resp">Confiável, meticuloso e previsível</label><br>
                        <input type="radio" name="1q" value="e" id="1qe" class="input-radio"><label for="1qe" class="label-resp">Focado, determinado e persistente</label><br>
                    <label class="perguntas">2- Eu gosto de...</label><br>
                        <input type="radio" name="2q" value="a" id="2qa" class="input-radio"><label for="2qa" class="label-resp">Idealista, criativo e visipnário</label><br>
                        <input type="radio" name="2q" value="c" id="2qc" class="input-radio"><label for="2qc" class="label-resp">Divertido, espiritual e benéfico</label><br>
                        <input type="radio" name="2q" value="p" id="2qp" class="input-radio"><label for="2qp" class="label-resp">Confiável, meticuloso e previsível</label><br>
                        <input type="radio" name="2q" value="e" id="2qe" class="input-radio"><label for="2qe" class="label-resp">Focado, determinado e persistente</label><br>
                    <label class="perguntas">3- Se você quiser se dar bem comigo...</label><br>
                        <input type="radio" name="3q" value="a" id="3qa" class="input-radio"><label for="3qa" class="label-resp">Idealista, criativo e visipnário</label><br>
                        <input type="radio" name="3q" value="c" id="3qc" class="input-radio"><label for="3qc" class="label-resp">Divertido, espiritual e benéfico</label><br>
                        <input type="radio" name="3q" value="p" id="3qp" class="input-radio"><label for="3qp" class="label-resp">Confiável, meticuloso e previsível</label><br>
                        <input type="radio" name="3q" value="e" id="3qe" class="input-radio"><label for="3qe" class="label-resp">Focado, determinado e persistente</label><br>
                    <label class="perguntas">4- Para conseguir obter bons resultados é preciso...</label><br>
                        <input type="radio" name="4q" value="a" id="4qa" class="input-radio"><label for="4qa" class="label-resp">Idealista, criativo e visipnário</label><br>
                        <input type="radio" name="4q" value="c" id="4qc" class="input-radio"><label for="4qc" class="label-resp">Divertido, espiritual e benéfico</label><br>
                        <input type="radio" name="4q" value="p" id="4qp" class="input-radio"><label for="4qp" class="label-resp">Confiável, meticuloso e previsível</label><br>
                        <input type="radio" name="4q" value="e" id="4qe" class="input-radio"><label for="4qe" class="label-resp">Focado, determinado e persistente</label><br>
                    <label class="perguntas">5- Eu me divirto quando...</label><br>
                        <input type="radio" name="5q" value="a" id="5qa" class="input-radio"><label for="5qa" class="label-resp">Idealista, criativo e visipnário</label><br>
                        <input type="radio" name="5q" value="c" id="5qc" class="input-radio"><label for="5qc" class="label-resp">Divertido, espiritual e benéfico</label><br>
                        <input type="radio" name="5q" value="p" id="5qp" class="input-radio"><label for="5qp" class="label-resp">Confiável, meticuloso e previsível</label><br>
                        <input type="radio" name="5q" value="e" id="5qe" class="input-radio"><label for="5qe" class="label-resp">Focado, determinado e persistente</label><br>
                    <label class="perguntas">6- Eu penso que...</label><br>
                        <input type="radio" name="6q" value="a" id="6qa" class="input-radio"><label for="6qa" class="label-resp">Idealista, criativo e visipnário</label><br>
                        <input type="radio" name="6q" value="c" id="6qc" class="input-radio"><label for="6qc" class="label-resp">Divertido, espiritual e benéfico</label><br>
                        <input type="radio" name="6q" value="p" id="6qp" class="input-radio"><label for="6qp" class="label-resp">Confiável, meticuloso e previsível</label><br>
                        <input type="radio" name="6q" value="e" id="6qe" class="input-radio"><label for="6qe" class="label-resp">Focado, determinado e persistente</label><br>
                    <label class="perguntas">7- Minha preocupação é...</label><br>
                        <input type="radio" name="7q" value="a" id="7qa" class="input-radio"><label for="7qa" class="label-resp">Idealista, criativo e visipnário</label><br>
                        <input type="radio" name="7q" value="c" id="7qc" class="input-radio"><label for="7qc" class="label-resp">Divertido, espiritual e benéfico</label><br>
                        <input type="radio" name="7q" value="p" id="7qp" class="input-radio"><label for="7qp" class="label-resp">Confiável, meticuloso e previsível</label><br>
                        <input type="radio" name="7q" value="e" id="7qe" class="input-radio"><label for="7qe" class="label-resp">Focado, determinado e persistente</label><br>
                    <label class="perguntas">8- Eu prefiro...</label><br>
                        <input type="radio" name="8q" value="a" id="8qa" class="input-radio"><label for="8qa" class="label-resp">Idealista, criativo e visipnário</label><br>
                        <input type="radio" name="8q" value="c" id="8qc" class="input-radio"><label for="8qc" class="label-resp">Divertido, espiritual e benéfico</label><br>
                        <input type="radio" name="8q" value="p" id="8qp" class="input-radio"><label for="8qp" class="label-resp">Confiável, meticuloso e previsível</label><br>
                        <input type="radio" name="8q" value="e" id="8qe" class="input-radio"><label for="8qe" class="label-resp">Focado, determinado e persistente</label><br>
                    <label class="perguntas">9- Eu gosto de...</label><br>
                        <input type="radio" name="9q" value="a" id="9qa" class="input-radio"><label for="9qa" class="label-resp">Idealista, criativo e visipnário</label><br>
                        <input type="radio" name="9q" value="c" id="9qc" class="input-radio"><label for="9qc" class="label-resp">Divertido, espiritual e benéfico</label><br>
                        <input type="radio" name="9q" value="p" id="9qp" class="input-radio"><label for="9qp" class="label-resp">Confiável, meticuloso e previsível</label><br>
                        <input type="radio" name="9q" value="e" id="9qe" class="input-radio"><label for="9qe" class="label-resp">Focado, determinado e persistente</label><br>
                </div>
                <div class="conjuto-perguntas">
                    <label class="perguntas">10- Eu gosto de chegar...</label><br>
                        <input type="radio" name="10q" value="a" id="10qa" class="input-radio"><label for="10qa" class="label-resp">Idealista, criativo e visipnário</label><br>
                        <input type="radio" name="10q" value="c" id="10qc" class="input-radio"><label for="10qc" class="label-resp">Divertido, espiritual e benéfico</label><br>
                        <input type="radio" name="10q" value="p" id="10qp" class="input-radio"><label for="10qp" class="label-resp">Confiável, meticuloso e previsível</label><br>
                        <input type="radio" name="10q" value="e" id="10qe" class="input-radio"><label for="10qe" class="label-resp">Focado, determinado e persistente</label><br>
                    <label class="perguntas">11- Um ótimo dia para mim é quando...</label><br>
                        <input type="radio" name="11q" value="a" id="11qa" class="input-radio"><label for="11qa" class="label-resp">Idealista, criativo e visipnário</label><br>
                        <input type="radio" name="11q" value="c" id="11qc" class="input-radio"><label for="11qc" class="label-resp">Divertido, espiritual e benéfico</label><br>
                        <input type="radio" name="11q" value="p" id="11qp" class="input-radio"><label for="11qp" class="label-resp">Confiável, meticuloso e previsível</label><br>
                        <input type="radio" name="11q" value="e" id="11qe" class="input-radio"><label for="11qe" class="label-resp">Focado, determinado e persistente</label><br>
                    <label class="perguntas">12- Eu vejo a morte como...</label><br>
                        <input type="radio" name="12q" value="a" id="12qa" class="input-radio"><label for="12qa" class="label-resp">Idealista, criativo e visipnário</label><br>
                        <input type="radio" name="12q" value="c" id="12qc" class="input-radio"><label for="12qc" class="label-resp">Divertido, espiritual e benéfico</label><br>
                        <input type="radio" name="12q" value="p" id="12qp" class="input-radio"><label for="12qp" class="label-resp">Confiável, meticuloso e previsível</label><br>
                        <input type="radio" name="12q" value="e" id="12qe" class="input-radio"><label for="12qe" class="label-resp">Focado, determinado e persistente</label><br>
                    <label class="perguntas">13- Minha filosofia de vida é...</label><br>
                        <input type="radio" name="13q" value="a" id="13qa" class="input-radio"><label for="13qa" class="label-resp">Idealista, criativo e visipnário</label><br>
                        <input type="radio" name="13q" value="c" id="13qc" class="input-radio"><label for="13qc" class="label-resp">Divertido, espiritual e benéfico</label><br>
                        <input type="radio" name="13q" value="p" id="13qp" class="input-radio"><label for="13qp" class="label-resp">Confiável, meticuloso e previsível</label><br>
                        <input type="radio" name="13q" value="e" id="13qe" class="input-radio"><label for="13qe" class="label-resp">Focado, determinado e persistente</label><br>
                    <label class="perguntas">14- Eu sempre gostei de...</label><br>
                        <input type="radio" name="14q" value="a" id="14qa" class="input-radio"><label for="14qa" class="label-resp">Idealista, criativo e visipnário</label><br>
                        <input type="radio" name="14q" value="c" id="14qc" class="input-radio"><label for="14qc" class="label-resp">Divertido, espiritual e benéfico</label><br>
                        <input type="radio" name="14q" value="p" id="14qp" class="input-radio"><label for="14qp" class="label-resp">Confiável, meticuloso e previsível</label><br>
                        <input type="radio" name="14q" value="e" id="14qe" class="input-radio"><label for="14qe" class="label-resp">Focado, determinado e persistente</label><br>
                    <label class="perguntas">15- Eu gosto de mudanças se...</label><br>
                        <input type="radio" name="15q" value="a" id="15qa" class="input-radio"><label for="15qa" class="label-resp">Idealista, criativo e visipnário</label><br>
                        <input type="radio" name="15q" value="c" id="15qc" class="input-radio"><label for="15qc" class="label-resp">Divertido, espiritual e benéfico</label><br>
                        <input type="radio" name="15q" value="p" id="15qp" class="input-radio"><label for="15qp" class="label-resp">Confiável, meticuloso e previsível</label><br>
                        <input type="radio" name="15q" value="e" id="15qe" class="input-radio"><label for="15qe" class="label-resp">Focado, determinado e persistente</label><br>
                    <label class="perguntas">16- Não exisite nada de errado em...</label><br>
                        <input type="radio" name="16q" value="a" id="16qa" class="input-radio"><label for="16qa" class="label-resp">Idealista, criativo e visipnário</label><br>
                        <input type="radio" name="16q" value="c" id="16qc" class="input-radio"><label for="16qc" class="label-resp">Divertido, espiritual e benéfico</label><br>
                        <input type="radio" name="16q" value="p" id="16qp" class="input-radio"><label for="16qp" class="label-resp">Confiável, meticuloso e previsível</label><br>
                        <input type="radio" name="16q" value="e" id="16qe" class="input-radio"><label for="16qe" class="label-resp">Focado, determinado e persistente</label><br>
                    <label class="perguntas">17- Eu gosto de buscar conselhos de...</label><br>
                        <input type="radio" name="17q" value="a" id="17qa" class="input-radio"><label for="17qa" class="label-resp">Idealista, criativo e visipnário</label><br>
                        <input type="radio" name="17q" value="c" id="17qc" class="input-radio"><label for="17qc" class="label-resp">Divertido, espiritual e benéfico</label><br>
                        <input type="radio" name="17q" value="p" id="17qp" class="input-radio"><label for="17qp" class="label-resp">Confiável, meticuloso e previsível</label><br>
                        <input type="radio" name="17q" value="e" id="17qe" class="input-radio"><label for="17qe" class="label-resp">Focado, determinado e persistente</label><br>
                </div>
                <div class="conjuto-perguntas">
                    <label class="perguntas">18- Meu lema é...</label><br>
                        <input type="radio" name="18q" value="a" id="18qa" class="input-radio"><label for="18qa" class="label-resp">Idealista, criativo e visipnário</label><br>
                        <input type="radio" name="18q" value="c" id="18qc" class="input-radio"><label for="18qc" class="label-resp">Divertido, espiritual e benéfico</label><br>
                        <input type="radio" name="18q" value="p" id="18qp" class="input-radio"><label for="18qp" class="label-resp">Confiável, meticuloso e previsível</label><br>
                        <input type="radio" name="18q" value="e" id="18qe" class="input-radio"><label for="18qe" class="label-resp">Focado, determinado e persistente</label><br>
                    <label class="perguntas">19- Eu gosto de...</label><br>
                        <input type="radio" name="19q" value="a" id="19qa" class="input-radio"><label for="19qa" class="label-resp">Idealista, criativo e visipnário</label><br>
                        <input type="radio" name="19q" value="c" id="19qc" class="input-radio"><label for="19qc" class="label-resp">Divertido, espiritual e benéfico</label><br>
                        <input type="radio" name="19q" value="p" id="19qp" class="input-radio"><label for="19qp" class="label-resp">Confiável, meticuloso e previsível</label><br>
                        <input type="radio" name="19q" value="e" id="19qe" class="input-radio"><label for="19qe" class="label-resp">Focado, determinado e persistente</label><br>
                    <label class="perguntas">20- Tempo para mim é...</label><br>
                        <input type="radio" name="20q" value="a" id="20qa" class="input-radio"><label for="20qa" class="label-resp">Idealista, criativo e visipnário</label><br>
                        <input type="radio" name="20q" value="c" id="20qc" class="input-radio"><label for="20qc" class="label-resp">Divertido, espiritual e benéfico</label><br>
                        <input type="radio" name="20q" value="p" id="20qp" class="input-radio"><label for="20qp" class="label-resp">Confiável, meticuloso e previsível</label><br>
                        <input type="radio" name="20q" value="e" id="20qe" class="input-radio"><label for="20qe" class="label-resp">Focado, determinado e persistente</label><br>
                    <label class="perguntas">21- Se eu fosse bilionário...</label><br>
                        <input type="radio" name="21q" value="a" id="21qa" class="input-radio"><label for="21qa" class="label-resp">Idealista, criativo e visipnário</label><br>
                        <input type="radio" name="21q" value="c" id="21qc" class="input-radio"><label for="21qc" class="label-resp">Divertido, espiritual e benéfico</label><br>
                        <input type="radio" name="21q" value="p" id="21qp" class="input-radio"><label for="21qp" class="label-resp">Confiável, meticuloso e previsível</label><br>
                        <input type="radio" name="21q" value="e" id="21qe" class="input-radio"><label for="21qe" class="label-resp">Focado, determinado e persistente</label><br>  
                    <label class="perguntas">22- Eu acredito que...</label><br>
                        <input type="radio" name="22q" value="a" id="22qa" class="input-radio"><label for="22qa" class="label-resp">Idealista, criativo e visipnário</label><br>
                        <input type="radio" name="22q" value="c" id="22qc" class="input-radio"><label for="22qc" class="label-resp">Divertido, espiritual e benéfico</label><br>
                        <input type="radio" name="22q" value="p" id="22qp" class="input-radio"><label for="22qp" class="label-resp">Confiável, meticuloso e previsível</label><br>
                        <input type="radio" name="22q" value="e" id="22qe" class="input-radio"><label for="22qe" class="label-resp">Focado, determinado e persistente</label><br>
                    <label class="perguntas">23- Eu acredito também que...</label><br>
                        <input type="radio" name="23q" value="a" id="23qa" class="input-radio"><label for="23qa" class="label-resp">Idealista, criativo e visipnário</label><br>
                        <input type="radio" name="23q" value="c" id="23qc" class="input-radio"><label for="23qc" class="label-resp">Divertido, espiritual e benéfico</label><br>
                        <input type="radio" name="23q" value="p" id="23qp" class="input-radio"><label for="23qp" class="label-resp">Confiável, meticuloso e previsível</label><br>
                        <input type="radio" name="23q" value="e" id="23qe" class="input-radio"><label for="23qe" class="label-resp">Focado, determinado e persistente</label><br>
                    <label class="perguntas">24- Eu acredito ainda que...</label><br>
                        <input type="radio" name="24q" value="a" id="24qa" class="input-radio"><label for="24qa" class="label-resp">Idealista, criativo e visipnário</label><br>
                        <input type="radio" name="24q" value="c" id="24qc" class="input-radio"><label for="24qc" class="label-resp">Divertido, espiritual e benéfico</label><br>
                        <input type="radio" name="24q" value="p" id="24qp" class="input-radio"><label for="24qp" class="label-resp">Confiável, meticuloso e previsível</label><br>
                        <input type="radio" name="24q" value="e" id="24qe" class="input-radio"><label for="24qe" class="label-resp">Focado, determinado e persistente</label><br>
                    <label class="perguntas">25- Eu penso que...</label><br>
                        <input type="radio" name="25q" value="a" id="25qa" class="input-radio"><label for="25qa" class="label-resp">Idealista, criativo e visipnário</label><br>
                        <input type="radio" name="25q" value="c" id="25qc" class="input-radio"><label for="25qc" class="label-resp">Divertido, espiritual e benéfico</label><br>
                        <input type="radio" name="25q" value="p" id="25qp" class="input-radio"><label for="25qp" class="label-resp">Confiável, meticuloso e previsível</label><br>
                        <input type="radio" name="25q" value="e" id="25qe" class="input-radio"><label for="25qe" class="label-resp">Focado, determinado e persistente</label><br>
                    <div class="btn-quest">
                        <button class="btn-tribus">Calcular Perfil</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Footer -->
        <?php include_once('elementos\footer.php')?>
    </body>
</html>