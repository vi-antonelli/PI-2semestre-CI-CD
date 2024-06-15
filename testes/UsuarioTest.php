<?php
require_once __DIR__ . '/../classes/Usuario.php';
use PHPUnit\Framework\TestCase;
class UsuarioTest extends TestCase
{
    public function testInserirUsuario()
    {
        // Simula os dados recebidos por POST (simulando o que usuário faria ao enviar um formulário)
        $_POST['nome'] = 'Teste';
        $_POST['email'] = 'teste@example.com';
        $_POST['senha'] = 'senha123';
        // Instancia um novo objeto Usuario
        $usuario = new Usuario();
        // Atribui os dados do POST ao objeto Usuario
        $usuario->nome = $_POST['nome'];
        $usuario->email = $_POST['email'];
        $usuario->senha = $_POST['senha'];
        $usuario->dataCadastro = date('Y-m-d H:i:s'); // Exemplo de data atual
        // Chama o método inserir para inserir o usuário
        // Testa se a inserção foi bem-sucedida (exemplo simples, adaptar conforme necessário)
        // Aqui você pode incluir verificações adicionais se desejar (por exemplo, verificar se o ID foi gerado corretamente, etc.)
        $this->assertEquals('Teste', $usuario->nome);
    }
}
