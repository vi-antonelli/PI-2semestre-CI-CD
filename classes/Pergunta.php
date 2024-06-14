
<?php
class Pergunta{
    public $id;
    public $pergunta;
    public $resposta;
    public $categoria;
    public $status;
 
    public function __construct($id = false)
    {
        if ($id){
            $this->id = $id;                
            $this->carregar();
        }
    }
   
    public function carregar(){
        $sql="SELECT * FROM pergunta WHERE id=".$this->id;
        include "classes/conexao.php";
        $resultado= $conexao->query($sql);
        $linha=$resultado->fetch();
 
        $this->id=$linha['id'];
        $this->pergunta=$linha['pergunta'];
        $this->resposta=$linha['resposta'];
        $this->categoria=$linha['categoria'];
    }
 
    public function listar(){
        $sql="SELECT p.id, p.pergunta, p.resposta, p.status, c.nome AS categorianome FROM pergunta p LEFT JOIN categoria c ON p.categoria = c.id WHERE status = 1";
 
        include "classes/conexao.php";
 
        $resultado=$conexao->query($sql);
 
        $lista=$resultado->fetchAll();
 
        return $lista;
    }
 
    public function listarAprovados(){
        $sql="SELECT p.id, p.pergunta, p.resposta, p.status, c.nome AS categorianome FROM pergunta p LEFT JOIN categoria c ON p.categoria = c.id WHERE status = 2";
 
        include "classes/conexao.php";
 
        $resultado=$conexao->query($sql);
 
        $lista=$resultado->fetchAll();
 
        return $lista;
    }
 
    public function listarReprovados(){
        $sql="SELECT p.id, p.pergunta, p.resposta, p.status, c.nome AS categorianome FROM pergunta p LEFT JOIN categoria c ON p.categoria = c.id WHERE status = 3";
 
        include "classes/conexao.php";
 
        $resultado=$conexao->query($sql);
 
        $lista=$resultado->fetchAll();
 
        return $lista;
    }
 
    public function listarVestibular(){
        $sql="SELECT p.id, p.pergunta, p.resposta, p.status, c.nome AS categorianome FROM pergunta p LEFT JOIN categoria c ON p.categoria = c.id WHERE status = 2 AND c.nome = 'Vestibular'";
 
        include "classes/conexao.php";
 
        $resultado=$conexao->query($sql);
 
        $vestibular=$resultado->fetchAll();
 
        return $vestibular;
    }
 
    public function listarAlunos(){
        $sql="SELECT p.id, p.pergunta, p.resposta, p.status, c.nome AS categorianome FROM pergunta p LEFT JOIN categoria c ON p.categoria = c.id WHERE status = 2 AND c.nome = 'Alunos'";
 
        include "classes/conexao.php";
 
        $resultado=$conexao->query($sql);
 
        $alunos=$resultado->fetchAll();
 
        return $alunos;
    }
 
    public function listarMatricula(){
        $sql="SELECT p.id, p.pergunta, p.resposta, p.status, c.nome AS categorianome FROM pergunta p LEFT JOIN categoria c ON p.categoria = c.id WHERE status = 2 AND c.nome = 'Matricula'";
 
        include "classes/conexao.php";
 
        $resultado=$conexao->query($sql);
 
        $matricula=$resultado->fetchAll();
 
        return $matricula;
    }
 
    public function inserir(){
        $sql="INSERT INTO pergunta (pergunta, resposta, categoria) VALUES(
            '{$this->pergunta}',
            '{$this->resposta}',
            '{$this->categoria}'
            )";
    include "Classes/conexao.php";
    $conexao->exec($sql);
    echo "Registro gravado com sucesso!";
    }
 
    public function usuarioinserir(){
        $sql="INSERT INTO pergunta (pergunta) VALUES(
            '{$this->pergunta}'
            )";
    include "Classes/conexao.php";
    $conexao->exec($sql);
    echo "Registro gravado com sucesso!";
    }
   
    public function excluir(){
        $sql="DELETE FROM pergunta WHERE id=".$this->id;
        include "classes/conexao.php";
        $conexao->exec($sql);
    }
 
    public function atualizar(){
        $sql="UPDATE pergunta SET
                pergunta='{$this->pergunta}',
                resposta='{$this->resposta}',
                categoria='{$this->categoria}'
            WHERE id={$this->id}";
       
        include "Classes/conexao.php";
        $conexao->exec($sql);
    }
 
    public function usuarioatualizar(){
        $sql="UPDATE pergunta SET
                pergunta='{$this->pergunta}'
            WHERE id={$this->id}";
       
        include "Classes/conexao.php";
        $conexao->exec($sql);
    }
 
    public function aprovar() {
        // Verificar se o campo "categoria" está vazio
        if (empty($this->categoria) || empty($this->resposta)) {
            // Se estiver vazio, exibir um alerta e redirecionar para a página anterior
            echo "<script>alert('Preencha tanto o campo de categoria quanto o campo de resposta antes de aprovar.'); window.location.href = 'adm.php';</script>";
            exit(); // Interrompe a execução da função
        }
   
        // Se a categoria não estiver vazia, continuar com a atualização
        $sql = "UPDATE pergunta SET status = 2 WHERE id=" . $this->id;
        include "classes/conexao.php";
        $conexao->exec($sql);
    }
}