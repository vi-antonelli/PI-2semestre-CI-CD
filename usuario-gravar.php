<?php
    require_once "classes/Pergunta.php";

    $pergunta=new Pergunta();
    
    $pergunta->pergunta=$_POST['pergunta'];

    // print_r($_POST['pergunta']);
    // print_r($_POST['resposta']);
    // print_r($_POST['categoria']);

    $pergunta->usuarioinserir();

    header("refresh:0.8; URL=usuario.php");
?>