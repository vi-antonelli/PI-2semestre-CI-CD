<?php
$email = $_POST["email"];
$senha = $_POST["senha"];


$sql = "SELECT * FROM usuario WHERE
        email='{$email}' and senha='{$senha}'";

include_once "classes/conexao.php";
$resultado = $conexao->query($sql);
$linha = $resultado->fetch();
$usuario_logado = $linha['email'];
$diretiva =  $linha['diretiva'];




if ($usuario_logado == null) {
	header('Location: usuario-erro.php');
} 


elseif($diretiva == 1){
	session_start();
	$_SESSION['usuario_logado'] = $usuario_logado;
	header('Location: usuario.php');
}

elseif($diretiva == 2) {
	session_start();
	$_SESSION['usuario_logado'] = $usuario_logado;
	header('Location: adm.php');
}

// else ($diretiva == 1){
// 	session_start();
// 	$_SESSION['diretiva'] = $diretiva;
// 	header('Location: adm.php');
// }
?>