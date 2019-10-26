<!doctype html>
<html lang="pt-br">
  <head>
    <?php include_once('elementos/head.php')?>
    <link rel="stylesheet" type="text/css" href="style/index/index.css">
  </head>
  <body>
    <!-- Navbar -->
    <?php include_once('elementos/navbarIndex.php')?>

    <!-- Conteudo -->
    <div class="conteudo-index">
        <div class="item-index" id="quemSomos">
            <img src="img/Logo/Logo.png" width="200" height="200" class="img-index">
            <div class="paragrafo-index">
                <h5>Quem somos:</h5>
                <p>
                Tribus é um projeto acadêmico que tem como objetivo inicial auxiliar professores a organizarem grupos em sala de aula 
                forma objetiva. Para tanto, ele poderá contar com o suporte do algoritmo de distribuição do Tribus, 
                que realiza a classificação dos grupos baseando-se na área de afinidade do aluno e no seu perfil comportamental. Tal divisão tem como 
                base a metodologia DISC para traçar os perfis dos alunos.
                </p>
            </div>
        </div>
        <div class="item-index" id="comoFunciona">
            <img src="img/teste.png" class="imglon-index img-index" style="display: none;" width="200" height="168">
            <div class="paragrafo-index">
                <h5>Como funciona:</h5>
                <p>                
                Tribus funciona com a base na metodologia DISC, para agrupar alunos em uma turma, para tanto, os passos são os descritos abaixo:
                <li>O professor deverá entrar na plataforma e criar um projeto, onde ele irá colocar o tema e irá identificar a turma.</li>
                <li>Após criado o projeto, o professor poderá compartilhar com seus alunos um link onde eles poderão responder uma serie de 
                perguntas a fim de traçar o perfil de cada aluno.</li>
                <li>Após todos responderem o questionário, a plataforma irá passar para o professor um inside onde ele poderá visualizar 
                um apanhado geral da turma por perfil. Exemplo: a porcentagem de alunos que tem o perfil de Planejador, Executor, Comunicativo e Analista</li>
                <li>De posse desse inside, o professor poderá gerar grupos de no mínimo 3 alunos, de forma que o algoritmo irá separá-los conforme suas respostas 
                dadas no questionário.</li>
                <li>Será listado para o professor o resultado final com os grupos separados.</li>
                </p>
            </div>
            <img src="img/como-funciona.png" class="imgl-index img-index" width="200" height="168">
        </div>
        <div class="item-index" id="perfisComp">
            <div>
                <img src="img/disc-comportamental.png" width="200" height="200" class="img-index">
                <!-- Conteudo 
                <img src="img/aguia.png" width="100" height="84" class="img_comp-index">
                <img src="img/gato.png" width="100" height="84" class="img_comp-index">
                -->
            </div>
            <div>
                <!-- Conteudo 
                <img src="img/tubarao.png" width="100" height="84" class="img_comp-index">
                <img src="img/lobo.png" width="100" height="84" class="img_comp-index">
                -->
            </div>
            <div class="paragrafo-index"> <!-- Perfil Comportamental -->
                <h5>Perfis comportamentais:</h5>
                <p>
                <b>Comunicador:</b>
                é uma pessoa comunicativa e geralmente dotada de grande carisma e
                poder de persuasão. Mostra-se sempre entusiasmado com projetos e novidades, tende a
                ser muito otimista e relaciona-se com facilidade. <br>
                Características: <br>
                ● Ótima oratória <br>
                ● Procuram sempre se conectar <br>
                ● Inovador e criativo <br>
                ● Extremamente otimista <br>
                ● Dificuldade de dizer não <br>
                ● Extremamente persuasivos (Vendem ideias) <br>
                ● Bons motivadores <br>
                ● Envolventes <br>
                ● Organização é um ponto negativo <br>
                ● Os Comunicadores têm grande influência sobre a equipe <br> <br>
                <b>Executor:</b>
                Dotado de extrema autoconfiança, esse tipo de profissional é dominante e, em
                casos extremos, pode ser autoritário e ditatorial. Aceita e se dá bem com desafios e
                dificuldades, possui senso de competitividade extremo e costuma ser corajoso em suas
                posturas e ao defender seus pontos de vista. <br>
                Características: <br>
                ● Resultado e velocidade <br>
                ● Competitivo <br>
                ● Perfil de dominante <br>
                ● Processos acima de relacionamento <br>
                ● Extremamente objetivos e assertivos <br> <br>
                <b>Planejador:</b>
                São pessoas estáveis e pacientes, de ritmo constante e alto grau de
                conservadorismo. Dificilmente entram em pânico, mas têm uma pequena capacidade de
                improviso. <br>
                Características: <br>
                ● Calmos e excelentes ouvintes <br>
                ● Equilibrados <br>
                ● Prezam o passo a passo <br>
                ● São conservadores <br>
                ● Necessitam de construir a trajetória de execução, ou seja, o planejador não executar <br>
                tarefas sem antes há entendê-la bem. <br>
                ● Planejadores precisam se sentirem seguros para executarem tarefas <br>
                ● Pessoas acima de processos <br>
                ● Mais dispostos de ouvir do que falar <br>
                ● Dificilmente discute com alguém <br>
                ● Necessitam-se de encorajamento (Mostre a eles o quanto são importante) <br> <br>
                <b>Analista:</b>
                Detalhista e meticuloso, o analista é organizado, responsável e altamente
                conservador, sendo hábil ao controlar processos e rotinas repetitivas. <br>
                Características: <br>
                ● Focado na qualidade <br>
                ● Processos acima de pessoas <br>
                ● Focados <br>
                ● Estudiosos <br>
                ● Entendimento aprofundado <br>
                ● Permita que os profissionais com perfil Analistas, desenvolvam seus estudos <br>
                ● Procuram sempre a perfeição, o que nem sempre é bom <br>
                ● São muitos exigentes consigo e com os outros <br>
                ● Pensam sempre nos pontos de melhorias <br>
                ● São extremamente fiéis <br>
                ● Percepção nas melhorias dos processos <br>
                ● Se colocam a disposição apenas quando percebem um risco eminente <br>
                ● Introspectivos <br>
                ● Extremamente detalhistas <br>
                ● Formais e voltados a regras <br>
                ● Tenham cuidado ao se comunicar com analistas, são criteriosos e analíticos. <br>
                </p>
            </div>
   
        </div>
        <div class="item-index" style="border-bottom: none; padding-bottom: 0;" id="perfisProf">
            <img src="img/perfil-profissional.png" width="200" height="200" class="img-index">
            <div class="group_select-index">
       
        <!-- DropDown Area de Atuação -->            
                            <!-- <div class="dropdown">
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
                </div> -->
            </div>
            <div class="paragrafo-index" style="border-left: 1px solid #0000001a; padding-left: 23px;">
                <h5>Perfis profissionais:</h5>
                <p>
                O perfil profissional é a apresentação do candidato, é o resumo de suas qualificações, habilidades, competências e experiências anteriores. 
                Entretanto, no nosso contexto serve apenas para trilhar o aluno em perfil de uma carreira que ele pretende seguir. Com isso, automaticamente 
                irá inclui-lo em um grupo de áreas afins nas distribuições de grupos.
                </p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include_once('elementos/footer.php')?>
  </body>
</html>