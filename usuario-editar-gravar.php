<?php
    require_once "classes/Pergunta.php";

    $id=$_POST['id'];
    $pergunta= new Pergunta($id);

    $pergunta->pergunta=$_POST['pergunta'];

    $pergunta->usuarioatualizar();
    header('Location: usuario.php');
?>