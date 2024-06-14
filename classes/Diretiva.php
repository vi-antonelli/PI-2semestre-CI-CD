<?php
class Diretiva{
    public $id;
    public $nome;

    public function __construct($id=false){
        if ($id){
            $this->id=$id;
            $this->carregar();
        }
    }

    public function inserir(){
        $sql="INSERT INTO diretiva(nome) VALUES(
        '".$this->nome."'
        )";

    include "classes/conexao.php";

    $conexao->exec($sql);
    echo "Registro gravado com sucesso!";
    }

    public function listar(){
        $sql="SELECT * FROM diretiva";

        include "classes/conexao.php";

        $resultado=$conexao->query($sql);

        $lista=$resultado->fetchAll();

        return $lista;
    }
    
    public function excluir(){
        $sql="DELETE FROM diretiva WHERE id=".$this->id;
        include "classes/conexao.php";

        $conexao->exec($sql);
    }

    public function carregar(){
        $sql="SELECT* FROM diretiva WHERE id=".$this->id;

        include "classes/conexao.php";

        $resultado=$conexao->query($sql);

        $linha=$resultado->fetch();

        $this->id=$linha['id'];
        $this->nome=$linha['nome'];
    }

    public function atualizar(){
        $sql="UPDATE diretiva SET
                nome='$this->nome'
            WHERE id=$this->id";
        
        include "classes/conexao.php";
        $conexao->exec($sql);
    }
}