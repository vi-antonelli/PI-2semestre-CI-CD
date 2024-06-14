<?php
class Status{
    public $id;
    public $status;

    public function __construct($id=false){
        if ($id){
            $this->id=$id;
            $this->carregar();
        }
    }

    public function inserir(){
        $sql="INSERT INTO perguntastatus(status) VALUES(
        '".$this->status."'
        )";

    include "classes/conexao.php";

    $conexao->exec($sql);
    echo "Registro gravado com sucesso!";
    }

    public function listar(){
        $sql="SELECT * FROM perguntastatus";

        include "classes/conexao.php";

        $resultado=$conexao->query($sql);

        $lista=$resultado->fetchAll();

        return $lista;
    }
    
    public function excluir(){
        $sql="DELETE FROM perguntastatus WHERE id=".$this->id;
        include "classes/conexao.php";

        $conexao->exec($sql);
    }

    public function carregar(){
        $sql="SELECT* FROM perguntastatus WHERE id=".$this->id;

        include "classes/conexao.php";

        $resultado=$conexao->query($sql);

        $linha=$resultado->fetch();

        $this->id=$linha['id'];
        $this->status=$linha['status'];
    }

    public function atualizar(){
        $sql="UPDATE perguntastatus SET
                status='$this->status'
            WHERE id=$this->id";
        
        include "classes/conexao.php";
        $conexao->exec($sql);
    }
}