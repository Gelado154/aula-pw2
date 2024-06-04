<?php
 
class Conexao {//inicia a classe 

  //aqui esta declarando as variaveis privadas//
private $host = "localhost";
private $usuario = "root";
private $senha = "";
private $banco = "exemplo_aula_pw";
private $conexao;
 
public function __construct() {//esta iniciando o metodo construtor,e toda vez que algo é instanciado ele é executado automaticamente//
  $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);
 
  if ($this->conexao->connect_error) {//ele verifica se deu algum tio de erro durante a conexão//

    die ("Falha na conexão: " . $this->conexao->connect_error);//se necessario exibe a mensagem de erro//
  }
}
public function getConexao() {// declara o metodo conexão//

return $this->conexao;//retorna aquilo que o usuario preencheu nos campos//
}
} 