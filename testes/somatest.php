<?php
require_once __DIR__ . '/../soma.php';
use PHPUnit\Framework\TestCase;

class SomaTest extends TestCase
{
    public function testSoma()
    {
        // Testa se a função soma retorna 2 quando os parâmetros são 1 e 1
        $this->assertEquals(2, soma(1, 1));
    }
}
?>
