<?php
class Conexao
{
 
//Close the connection
//mysqli_close($conn);



    // Declaração dos atributos da classe de conexão
    private $host; // Endereço do servidor do banco de dados
    private $bd; // Banco de dados utilizado na conexão
    private $usuario; // Usuário do banco de dados que possua acesso ao schema
    private $senha; // Senha do usuário
    private $sql; // Consulta a ser executada
    private $conexao;
    
    private function configuraDados()
    {
        $this->bd = 'tribusdb';
        $this->host = 'tribusdb.mysql.database.azure.com';
        $this->usuario = 'tribus@tribusdb';
        $this->senha = 'Unibh@2019';
    }
    
    function __construct()
    {
        try {	
			/*
             * Método que conecta ao banco de dados passando
             * os valores necessários para que a conexão ocorra
             */
            $this->configuraDados();
            
        } catch (PDOException $e) {
            # call the get_error function
           // $this->get_error($e);
        }
    }
    public function __sleep()
    {
        return array('bd', 'host', 'usuario', 'senha');
    }
    public function __wakeup()
    {
        $this->conectar();
    }
    function conectar()
    {
        
        $query = "mysql:host=" . $this->host . ";dbname=" . $this->bd . ";charset=utf8";
        $this->conexao = new PDO($query, $this->usuario, $this->senha);
        
        return $this->conexao;
    }
    
}
?>