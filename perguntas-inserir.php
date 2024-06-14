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
    <link rel="stylesheet" href="Estilos/perguntas-inserir.css">
    <title>Nova Pergunta</title>
</head>

<body>

    <div class="sidebar">
        <div class="admin-section">
            <h2>Portal do Administrador</h2>
        </div>
        <div class="suggestions-section">
            <h2><a href="perguntas-inserir.php">Nova Pergunta</a><br></h2>
        </div>
        <div class="suggestions-section">
            <h2><a href="adm.php">Perguntas em Aguardo</a><br></h2>
        </div>
        <div class="suggestions-section">
            <h2><a href="perguntas-aprovadas.php">Perguntas Aprovadas</a><br><br></h2>
        </div>
        <div class="suggestions-section">
            <h2><a href="index.php">Sair</a><br><br></h2>
        </div>
    </div>


    <div class="main-content">
        <div class="header">
            Nova Pergunta
        </div>

        <table border="1">
            <tr>
                <th>Pergunta</th>
                <th>Resposta</th>
                <th id="cat">Categoria</th>
            </tr>
        <table>

    <form action="perguntas-gravar.php" method="POST">
        <input type="text" name="pergunta" id="pergunta">
        <input type="text" name="resposta" id="resposta">
        <select name="categoria" id="categoria">
            <option value=''>Selecione...</option>
            <?php
                foreach ($listaCategoria as $categoria):
                    echo "<option value='{$categoria['id']}'>
                        {$categoria['nome']}
                        </option>";
                endforeach;
            ?>
        </select><br><br>
    	<input type="submit" value="Inserir" id="botaoinserir">
    </form>
</body>
</html>