<?php
    require_once "classes/Pergunta.php";

    $id=$_GET['id'];
    $pergunta= new Pergunta($id);
    $pergunta->excluir();
    header('Location: adm.php');
?>