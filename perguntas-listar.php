<?php
    
    require_once "classes/Pergunta.php";
    $pergunta=new Pergunta();
    $lista=$pergunta->listar();

?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Faq - Itapira</title>
    </head>
    <body>
        <h1>Faq - Itapira</h1>
        <h3>Listar perguntas</h3>
        <a href="perguntas-inserir.php">Nova Pergunta:</a><br><br>
        <a href="perguntas-aprovadas.php">Perguntas Aprovadas:</a><br><br>
        <table border="1">
            <tr>
                <th>Pergunta</th>
                <th>Resposta</th>
                <th>Categoria</th>
                <th>Ações</th>  
            </tr>
            <?php foreach ($lista as $linha):?>
            <tr>
                <td><?php echo $linha['pergunta']?></td>
                <td><?php echo $linha['resposta']?></td>
                <td><?php echo $linha['categorianome']?></td>
                <td>
                    <a href="perguntas-editar.php?id=<?=$linha['id']?>">Atualizar</a>
                    <a href="perguntas-excluir.php?id=<?=$linha['pergunta']?>">Excluir</a>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
    </body>
    </html>