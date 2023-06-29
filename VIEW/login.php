<?php
include_once 'C:\xampp\htdocs\trabalho-php\BLL\bllUsuario.php';
include_once 'C:\xampp\htdocs\trabalho-php\MODEL\usuario.php';

$usuario = trim($_POST['usuario']);
$senha = trim($_POST['senha']);

$bll = new  \BLL\BllUsuario();

$objUsuario = new \MODEL\Usuario();

$objUsuario = $bll->SelectUser($usuario);
if (md5($senha) == $objUsuario->getSenha()) {
    session_start();
    $_SESSION['login'] =  $objUsuario->getUsuario();
    header("location:menu.php");
} else {
    header("location:index.php");
}
