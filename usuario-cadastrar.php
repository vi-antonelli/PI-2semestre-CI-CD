<?php
    session_start();
    require_once "classes/Usuario.php";

    $usuario=new Usuario();
    
    $usuario->nome=$_POST['nome'];
    $usuario->email=$_POST['email'];
    $usuario->senha=$_POST['senha'];

    // print_r($_POST['nome']);
    // print_r($_POST['email']);
    // print_r($_POST['senha']);

    $usuario->inserir();

    $_SESSION['cadastro_sucesso'] = true;

    header("location: login.php");
    
    exit();
?>