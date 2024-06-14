<?php
    require_once "classes/Pergunta.php";
    $pergunta=new Pergunta();
    $lista=$pergunta->listarAprovados();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguntas Aprovadas</title>
    <link rel="stylesheet" href="Estilos/adm.css">
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
            Sugestões Aprovadas
        </div>

        <table border="1">
            <tr>
                <th>Pergunta</th>
                <th>Resposta</th>
                <th id="cat">Categoria</th>
                <th id="acoes">Ações</th>  
            </tr>
            <?php foreach ($lista as $linha):?>
            <tr>
                <td><?php echo $linha['pergunta']?></td>
                <td><?php echo $linha['resposta']?></td>
                <td><?php echo $linha['categorianome']?></td>
                <td>
                    <button class="botaoatualizar"><a href="perguntas-editar.php?id=<?=$linha['id']?>">Atualizar</a></button>
                    <button class="botao"><a href="aprovado-excluir.php?id=<?=$linha['id']?>">Excluir</a></button>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>