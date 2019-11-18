<?php
  error_reporting(0);
  class Group {
    
    private $student;
    private $project;
    private $conection;
    private $qtdStudent;
    private $qtdStudentGroup;
    private $qtdGroup;
    private $qtdPredominant = 0;
    private $predominant = [];
    private $groups = [];
    


    public function __construct($student,$project,$qtdStudent,$conection){
      $this->student = $student;
      $this->project = $project;
      $this->qtdStudent = $qtdStudent;
      $this->qtdGroup = $qtdStudent-1;
      $this->conection = $conection;
      $this->findBestQtdGroup();
      //$this->ClassroomProfile();
    }


    public function findBestQtdGroup(){
      while($this->qtdStudent/$this->qtdGroup < 4){
        $this->qtdGroup--; 
      }

      if($this->qtdStudent <= 14){
        $this->qtdStudentGroup = intval($this->qtdStudent/$this->qtdGroup)+1;
      } elseif($this->qtdStudent%$this->qtdGroup==0){
        $this->qtdStudentGroup = $this->qtdStudent/$this->qtdGroup;
      } else {
        $this->qtdStudentGroup = intval($this->qtdStudent/$this->qtdGroup)+2;
        $this->qtdGroup--;
      }
    }

    public function ClassroomProfile(){
      $query = "select perfil, count(*) as qtde from alunos where projeto =".$this->project." group by perfil";
      $stmt = $this->conection->prepare($query);
      $stmt->execute();
      
      while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
        if(intval(intval($row->qtde)/$this->qtdGroup) > 0){
          $this->predominant[$row->perfil] = intval(intval($row->qtde)/$this->qtdGroup);//Quantidade Perfil Predominante
          $this->qtdPredominant += intval(intval($row->qtde)/$this->qtdGroup);
        }
      }
    }

    public function biuldGroups(){
      while(count($this->student)>0){
        $this->ClassroomProfile();
        for($i=0;$i<$this->qtdGroup;$i++){
          
          //Inicia variaveis
          $profilesPredominants = $this->predominant;
          $profilesNotPredominants = [];
          $aux = [];//antigo aluno
  
          //reordena o array
          $this->student = array_values($this->student);
          $this->qtdStudent = count($this->student);
  
          for($j=0;$j<$this->qtdStudent;$j++){
            
            $profile = $this->student[$j][3];
  
            if(count($aux) < $this->qtdStudentGroup){
              if(array_key_exists($profile, $this->predominant) && $profilesPredominants[$profile] > 0 && (count($this->groups[$i])+count($aux) < $this->qtdStudentGroup)){
                //insere no banco
                $query = "insert into grupos values (".($i+1).",".$this->project.", ".$this->student[$j][0].",'".$this->student[$j][1]."','".$this->student[$j][2]."','".$this->student[$j][3]."')";
                $stmt = $this->conection->prepare($query);
                $stmt->execute();
                //Adicionar perfil predominante que entrou
                $profilesPredominants[$this->student[$j][3]] -= 1;
                //Remove aluno do result
                unset($this->student[$j]);
                //incrementa aux
                array_push($aux, $profile);
  
              } elseif(count($profilesNotPredominants) < ($this->qtdStudentGroup-$this->qtdPredominant) && !in_array($profile, $aux) && (count($this->groups[$i])+count($aux)) < $this->qtdStudentGroup){
                $query = "insert into grupos values (".($i+1).",".$this->project.", ".$this->student[$j][0].",'".$this->student[$j][1]."','".$this->student[$j][2]."','".$this->student[$j][3]."')";
                $stmt = $this->conection->prepare($query);
                $stmt->execute();
                //Incrmenta de qtdeAlunos
                array_push($profilesNotPredominants, $profile);
                //Remove aluno do result
                unset($this->student[$j]);
                //incrementa aux
                array_push($aux, $profile);
  
              } /*elseif(count($profilesNotPredominants) < ($this->qtdStudentGroup-$this->qtdPredominant)){
                $query = "insert into grupos values (".($i+1).",".$this->project.", ".$this->student[$j][0].",'".$this->student[$j][1]."','".$this->student[$j][2]."','".$this->student[$j][3]."')";
                $stmt = $this->conection->prepare($query);
                $stmt->execute();
                //Incrmenta de qtdeAlunos
                array_push($profilesNotPredominants, $profile);
                //Remove aluno do result
                unset($this->student[$j]);
                //incrementa aux
                array_push($aux, $profile);*/
              //}
            }
          }
          $this->groups[$i] = $aux;
        }
      }
      
      if(count($this->student)==0){
        return true;
      } else {
        return false;
      }
    }

  }

?>