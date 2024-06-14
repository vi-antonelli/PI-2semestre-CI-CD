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
        <title>Editar Pergunta</title>
        <link rel="stylesheet" href="Estilos/usuario-editar.css">
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
                Editar Pergunta
            </div>

            <table border="1">
                <tr>
                    <th>Pergunta</th>
                </tr>
            </table>




        <form action="usuario-editar-gravar.php" method="POST">
            <input type="hidden" name="id" value="<?=$pergunta->id?>">
            <input type="text" id="pergunta" name="pergunta" value="<?=$pergunta->pergunta?>"><br><br>
            
            <input type="submit" id="atualizar" value="Atualizar">
        </form>
    </body>
</html>