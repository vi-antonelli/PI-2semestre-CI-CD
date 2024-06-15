<?php

require_once 'inserir_usuario.php'; // Inclui o código que você quer testar

use PHPUnit\Framework\TestCase;

class UsuarioTeste extends TestCase
{
    public function testInserirUsuario()
    {
        // Simula dados de POST
        $_POST['nome'] = 'João';
        $_POST['email'] = 'joao@example.com';
        $_POST['senha'] = 'senha123';

        // Chama a função para inserir o usuário
        inserirUsuario();

        // Verifica se a sessão 'cadastro_sucesso' foi definida como true
        $this->assertTrue($_SESSION['cadastro_sucesso']);
    }
}
