<?php
    require_once "classes/Pergunta.php";

    $id=$_POST['id'];
    $pergunta= new Pergunta($id);

    $pergunta->pergunta=$_POST['pergunta'];
    $pergunta->resposta=$_POST['resposta'];
    $pergunta->categoria=$_POST['categoria'];

    $pergunta->atualizar();
    header('Location: adm.php');
?>