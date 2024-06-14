<?php
    require_once "classes/Pergunta.php";
    $pergunta=new Pergunta();
    $lista=$pergunta->listar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suas Sugestões</title>
    <link rel="stylesheet" href="Estilos/usuario.css">
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
            Suas Sugestões
        </div>

        <table border="1">
            <tr>
                <th>Pergunta</th>
                <th id="acoes">Ações</th>  
            </tr>

            <?php foreach ($lista as $linha):?>
            <tr>
                <td><?php echo $linha['pergunta']?></td>
                <td>
                    <button class="botao"><a href="usuario-editar.php?id=<?=$linha['id']?>">Atualizar</a></button>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>