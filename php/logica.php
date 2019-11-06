<?php

  include_once('../Conexao/Conexao.php');

  class Group {
    private $students = [];
    private $predominants;
    private $profilePrefominants;
    private $groups;
    private $numGroups;
    private $numMinPeople = 4;
    private $projeto;
    //private 

    public function __construct(Array $students, $projeto) {
      $this->$students = $students;
      $this->$projeto = $projeto;
      findNumGroups();
      findPredomintant();
      getPredominants();
      setPredominants();
      //setStudents();
    }

    private function findNumGroups() {
      $this->$numGroups = count($this->$students)/$this->$numMinPeople;
    }
    
    private function findPredomintant() {
      $conexao = new Conexao();
      $con = $conexao->conectar();
      //Query em perfis e verificar se o numero de qtd_perfil/alunos
      $query = "SELECT perfil, count(*) AS qtde FROM alunos 
                WHERE projeto = ".$this->$projeto." 
                GROUP BY perfil";
      $stmt = $con->prepare($query);
      $stmt->execute();

      while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
        $valor = intval(intval($row->qtde)/$this->$numGroups);

        if($valor > 0){
          $this->$profilePrefominants[$row->perfil] = $valor;
        }
      }
    }

    private function getPredominants() {
      //aqui vc vai retornar o array de predominantes
      for($i=0;$i<count($this->$students);$i++){

        if(array_key_exists($this->$students[$i][2], $this->$profilePrefominants)){

          //insere em array
          array_push($this->$predominants, $this->$students);
          //retira da base principal
          unset($this->$students[$j]);
          //reordena a base
          $this->$students = array_values($result);

        }

      }
    }
    
    private function setPredominants() {
      $conexao = new Conexao();
      $con = $conexao->conectar();
      // fazer o for com a qts de grupos
      // inserir o numero de predominantes em cada grupo

      for($i=0;$i<$this->$numGroups;$i++){
        for($j=0;$j<count($this->$predominants);$j++){
          $profile = $this->$predominants[$j][2];
          if(count($this->$groups) < $this->$profilePrefominants[$profile]){
            $query = "INSERT INTO grupos 
            VALUES (".$i.",".$this->$projeto.",'".$this->$students[$i][0]."','".$this->$students[$i][1]."', ".$this->$students[$i][2].")";
            $stmt = $con->prepare($query);
            $stmt->execute();
          }
        }
      }
    }

    private function setStudents() {
      // fazer o for com qts de grupos
      // tem que ter a regra pra não passar de 4 e 8
      // tem que ter a regra pra não inserir o mesmo tipo de perfil em um grupo
    }
  }
?>