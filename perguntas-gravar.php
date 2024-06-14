<?php
    require_once "classes/Pergunta.php";

    $pergunta=new Pergunta();
    
    $pergunta->pergunta=$_POST['pergunta'];
    $pergunta->resposta=$_POST['resposta'];
    $pergunta->categoria=$_POST['categoria'];

    // print_r($_POST['pergunta']);
    // print_r($_POST['resposta']);
    // print_r($_POST['categoria']);

    $pergunta->inserir();

    header("refresh:0.8; URL=adm.php");
?>