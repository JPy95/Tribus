<?php

    include_once('../Conexao/Conexao.php');
    $conexao = new Conexao();
    $con = $conexao->conectar();

    $qtdAlunos = $_POST['qtde'];
    $projeto = $_POST['projeto'];

    /*
        Quantidade de Grupos

        Criterios:
        -Quantidade de alunos por grupo 4 a 8 alunos;
    */
    $qtdeGrupos = $qtdAlunos-1;
    $controle = false;

    while($controle==false){
        if($qtdAlunos%$qtdeGrupos==0){
            if($qtdAlunos/$qtdeGrupos >= 4){
                $controle = true;
            } else {
                $qtdeGrupos--;
            }
        } else {
            $qtdeGrupos--;
            if($qtdeGrupos==0){
                //qtde min para um grupo seria 4 pessoas.
                $controle==true;
            }
        }
    }


    //Buscando dados dos alunos
    $query = "select idAulno, nome, atuacao, perfil from alunos where projeto = 62336";
    $stmt = $con->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();

    $alunos = [];
    $grupos = [];
    $qtdeAlunoGrupo = $qtdAlunos/$qtdeGrupos;

    for($i=0;$i<$qtdeGrupos;$i++){
        
        //Zera array perfil a cada vez que mudar o grupo
        $perfil = [];

        //reordena o array
        $result = array_values($result);
        $qtdAlunos = count($result);
        for($j=0;$j<$qtdAlunos;$j++){

            if((!in_array($result[$j][3],$perfil)) && count($perfil) < $qtdeAlunoGrupo){

                //Adiciona dados do aluno em uma array
                array_push($alunos, array($result[$j][1],$result[$j][2],$result[$j][3]));
                //Remove aluno do result
                unset($result[$j]);
                
                //Insere perfil do aluno para controle
                array_push($perfil,$alunos[0][2]);
    
            } elseif(count($perfil)==3){
                $perfil = [];
            }
        }
        
        //Insere alunos no grupo
        array_push($grupos,$alunos);
        //Zera o array com os dados do aluno
        $alunos = [];
    }
    //var_dump($grupos[0]);
    var_dump($grupos[2]);

    //array_push($alunos, array($result[0][1],$result[0][2],$result[0][3]));
    //array_push($alunos, array($result[1][1],$result[1][2],$result[1][3]));
    //array_push($grupos,$alunos);
    //array_push($perfil,$alunos[0][2], $alunos[1][2]);
    //var_dump($result[0][3]);

    //var_dump(in_array("Comunicador", $alunos[0]));
    //var_dump($alunos);
    //var_dump($alunos[0][2]);
    //var_dump($result[0][0],$result[0][1],$result[0][2],$result[0][3]);
?>