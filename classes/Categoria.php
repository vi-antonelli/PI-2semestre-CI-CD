<?php
class Categoria{
    public $id;
    public $nome;

    public function __construct($id=false){
        if ($id){
            $this->id=$id;
            $this->carregar();
        }
    }

    public function inserir(){
        $sql="INSERT INTO categoria(nome) VALUES(
        '".$this->nome."'
        )";

    include "classes/conexao.php";

    $conexao->exec($sql);
    echo "Registro gravado com sucesso!";
    }

    public function listar(){
        $sql="SELECT * FROM categoria";

        include "classes/conexao.php";

        $resultado=$conexao->query($sql);

        $lista=$resultado->fetchAll();

        return $lista;
    }
    
    public function excluir(){
        $sql="DELETE FROM categoria WHERE id=".$this->id;
        echo $sql;
        die();

        include "classes/conexao.php";

        $conexao->exec($sql);
    }

    public function carregar(){
        $sql="SELECT * FROM categoria WHERE id=".$this->id;

        include "classes/conexao.php";

        $resultado=$conexao->query($sql);

        $linha=$resultado->fetch();

        // $this->id=$linha['id'];
        // $this->nome=$linha['nome'];
    }

    public function atualizar(){
        $sql="UPDATE categoria SET
                nome='$this->nome'
            WHERE id=$this->id";
        
        include "classes/conexao.php";
        $conexao->exec($sql);
    }
}