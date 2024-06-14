<?php
   
   require_once "classes/Pergunta.php";
   require_once "classes/Categoria.php";
    $pergunta=new Pergunta();
    $lista=$pergunta->listar();
    $categoria=new Categoria();
    $listaCategoria=$categoria->listar();



    // echo "<pre>";
    // var_dump($lista);
    // echo "</pre>";
    // die();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Pergunta</title>
    <link rel="stylesheet" href="Estilos/usuarios-inserir.css">
</head>
<body>

    <!--Conteúdo-->
    <div class="sidebar">
            
        <div class="admin-section">
            <h2>Portal do Usuário</h2>
        </div>
        <div class="suggestions-section">
            <h2><a href="usuario.php">Suas Sugestões</a><br></h2>
            <h2><a href="usuario-inserir.php">Faça uma Nova Pergunta</a><br><br></h2>
            <h2><a href="index.php">Sair</a></h2>
        </div>
    </div>

    <div class="main-content">
        <div class="header">
            Nova Pergunta
        </div>
        <table border="1">
            <tr>
                <th>Pergunta</th>
            </tr>
        </table>

    <form action="usuario-gravar.php" method="POST">
        <input type="text" id="textopergunta" name="pergunta">

        
    	<input type="submit" value="Enviar Pergunta" id="botaoenviar">
    </form>
</body>
</html>