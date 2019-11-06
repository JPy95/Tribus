<?php

    include_once('../Conexao/Conexao.php');
    include_once('../logica.php');
    $conexao = new Conexao();
    $con = $conexao->conectar();

    $qtdAlunos = $_POST['qtde'];
    $projeto = $_POST['projeto'];
    $qtdeGrupos = $qtdAlunos-1;

    //quantidade de grupos
    while($qtdAlunos/$qtdeGrupos < 4){
        $qtdeGrupos--;
    }

    //quantidade de alunos
    if($qtdAlunos%$qtdeGrupos==0){
        $qtdeAlunoGrupo = $qtdAlunos/$qtdeGrupos;
    } else {
        $qtdeAlunoGrupo = intval($qtdAlunos/$qtdeGrupos)+1;
    }
    
    //Buscando perfil da sala
    $query = "select perfil, count(*) as qtde from alunos where projeto = 62336 group by perfil";
    $stmt = $con->prepare($query);
    $stmt->execute();
    $qtdePredominante = 0;
    while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
        if(intval(intval($row->qtde)/$qtdeGrupos) > 0){
            $predominante[$row->perfil] = intval(intval($row->qtde)/$qtdeGrupos);//Quantidade Perfil Predominante
            $qtdePredominante += intval(intval($row->qtde)/$qtdeGrupos);
        }
    }

    //Buscando dados dos alunos
    $query = "select nome, atuacao, perfil from alunos where projeto = 62336";
    $stmt = $con->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();   
    
    $grupos = [];

    for($i=0;$i<$qtdeGrupos;$i++){

        //Inicia variaveis
        $profiles = [];
        $alunos = [];
        $controle = 0;

        //reordena o array
        $result = array_values($result);
        $qtdAlunos = count($result);

        for($j=0;$j<$qtdAlunos;$j++){

            $profile = $result[$j]["perfil"];

            if(count($alunos) < $qtdeAlunoGrupo){
                if(array_key_exists($profile, $predominante) && $controle < $predominante[$profile]){
                    //Adiciona dados do aluno em uma array
                    array_push($alunos, array($result[$j][0],$result[$j][1],$result[$j][2]));
                    //Remove aluno do result
                    unset($result[$j]);
                    //Incrmenta de qtdeAlunos
                    $controle++;
                } elseif(count($profiles) < ($qtdeAlunoGrupo-$qtdePredominante)){
                    //Adiciona dados do aluno em uma array
                    array_push($alunos, array($result[$j][0],$result[$j][1],$result[$j][2]));
                    //Incrmenta de qtdeAlunos
                    array_push($profiles, $profile);
                    //Remove aluno do result
                    unset($result[$j]);
                }
            }
        }
        //Insere alunos no grupo
        array_push($grupos,$alunos);
        //var_dump($profiles);
    }

    var_dump($grupos);
?>