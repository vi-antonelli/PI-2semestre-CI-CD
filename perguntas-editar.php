<?php
    require_once "classes/Pergunta.php";
    require_once "classes/Categoria.php";

    $id=$_GET['id'];
    $pergunta=new Pergunta($id);

    $categoria=new Categoria($id);
    $listaCategoria=$categoria->listar();
?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Estilos/perguntas-editar.css">
        <title>Atualizar Pergunta</title>
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
            Atualizar Pergunta
        </div>

        <table border="1">
            <tr>
                <th>Pergunta</th>
                <th>Resposta</th>
                <th id="cat">Categoria</th>
            </tr>
        <table>


        <form action="perguntas-editar-gravar.php" method="POST">
            <input type="hidden" name="id" value="<?=$pergunta->id?>">
            <input type="text" id="pergunta" name="pergunta" value="<?=$pergunta->pergunta?>">
            <input type="text" id="resposta" name="resposta" value="<?=$pergunta->resposta?>">
            
            <select id="categoria" name="categoria">
            <option value=''>Selecione...</option>
            <?php
                foreach ($listaCategoria as $categoria):
                    if ($categoria['id'] == $pergunta->categoria) {
                        echo "<option value='{$categoria['id']}' selected>
                        {$categoria['nome']}
                        </option>";
                    } else {
                        echo "<option value='{$categoria['id']}'>
                        {$categoria['nome']}
                        </option>";
                    }  
                endforeach;

            ?>
        </select><br><br>
            <input type="submit" value="Atualizar" id="atualizar">
        </form>
    </body>
</html>