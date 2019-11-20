<?php
    clearstatcache();
    include_once('../Conexao/Conexao.php');
    $conexao = new Conexao();
    $con = $conexao->conectar();
    //Variaveis
    $dataInclusão = date("Y-m-d H:i:s");
    $idtAluno = mt_rand(0, 999999);
    $nome = $_POST['nome'];
    $projeto = intval($_POST['projeto']);
    $atuacao = $_POST['atuacao'];
    
    if($projeto == 0 ){
      header("Location: ../../startQuiz.php?projeto=false&projeto=".$projeto);
    } elseif (empty($nome)){
      header("Location: ../../startQuiz.php?nome=false&projeto=".$projeto);
    } elseif ($atuacao == "0") {
      header("Location: ../../startQuiz.php?atuacao=false&projeto=".$projeto);
    } else {
      //Qtde TotalAlunosProjeto
      $query = "SELECT qtdeAlunos FROM projeto WHERE idtProjeto = ".$projeto;
      $stmt = $con->prepare($query);
      $stmt->execute();
      $row = $stmt->fetch(PDO::FETCH_OBJ);
      $qtdeAlunos = $row->qtdeAlunos;

      //Qtde cadastrados
      $query = "SELECT COUNT(*) AS cadastrados  FROM alunos WHERE projeto = ".$projeto ;
      $stmt = $con->prepare($query);
      $stmt->execute();
      $row = $stmt->fetch(PDO::FETCH_OBJ);
      $cadastrados = $row->cadastrados;

      if(!is_null($qtdeAlunos)){
        if($qtdeAlunos == $cadastrados){
          header("Location: ../../startQuiz.php?cadastro=false&projeto=".$projeto);
        } else {
          //inserindo aluno no bd
          $query = "INSERT INTO alunos VALUES('".$dataInclusão."',null,'".$nome."',".$projeto.",'".$atuacao."',null,".$idtAluno.")";
          $stmt = $con->prepare($query);
          $stmt->execute();
          
          //Busca idAluno
          $query = "select idAluno from alunos where dtaInclusao = '".$dataInclusão."' and idtAluno = ".$idtAluno;
          $stmt = $con->prepare($query);
          $stmt->execute();
          $idAluno = intval($stmt->fetch(PDO::FETCH_OBJ)->idAluno);

          header("Location: ../../questionario.php?projeto=".$projeto."&idAluno=".$idAluno);
        }
      } elseif(is_null($qtdeAlunos)) {
        header("Location: ../../startQuiz.php?projeto=false");
      }
    }
?>