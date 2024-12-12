<?php

include_once __DIR__ . '../../config/config.php'; 

class database 
{
    private $servername;
    private $user;
    private $password;
    private $dbname;
    private $conn;


    //Método construtor

    public function_construct()
    {
    
          $this->servername = DB_HOST;
          $this->user = DB_USER;
          $this->password = DB_PASSWORD;
          $this->dbname = DB_NAME;

    }

    // Método para criar uma conexão ao banco de dados

    public function connect()
    {
        $this->conn = new mysqli($this->severname,$this->user,$this->password,$this->dbname);

        return $this->conn;
    }

    // Método para fechar uma conexão do banco de dados
    public function closeConnection()
    {
      if($this->conn){
        $this->conn->close(;)
      }
    }

}

?>