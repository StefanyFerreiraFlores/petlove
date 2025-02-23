<?php

include_once __DIR__ . '../../database/Database.php';


class Servico {
    //Atributos
 private $id;
 private $valor;
 private $descricao;
 private $duracao;

// Métodos construtor
public function __construct($id, $valor, $descricao, $duracao)
{

    $this->id =$id;
    $this->valor =$valor;
    $this->descricao =$descricao;
    $this->duracao =$duracao;

}

//Métodos Get e Set

public function getId(){
    return $this->id;
}
public function getValor(){
    return $this->valor;
}
public function getDescricao(){
    return $this->descricao;
}
public function getDuracao(){
    return $this->duracao;
}

//Métodos Set
public function setId($id){
    $this->id = $id;
}
public function setValor($valor){
    $this->valor = $valor;
}
public function setDescricao($descricao){
    $this->descricao = $descricao;
}
public function setDuracao($duracao){
    $this->duracao = $duracao;
}

//Demais métodos

public function cadastrar(){
    //Conectar com o banco de dados

    $db = new Database();
    $conn =$db->connect();

    //Salvar no banco de dados
    $stmt = $conn->prepare("INSERT INTO cliente (id,nome,telefone,email,senha) VALUES (?,?,?,?)");
    $stmt->bind_param("ssss",$this->id,$this->nome,$this->telefone,$this->email,$this->senha);

    if ($stmt->execute()){
        $stmt->close();
        $db->closeConnection();
        return true;
    }
}

else {
    $stmt->close();
    $db->closeConnectio();
    return false;
}

//Métodos

public function cadastrar(){

}
public function atualizar(){

}

public function apagar(){

}

public function buscarClientes(){

}




}
?>