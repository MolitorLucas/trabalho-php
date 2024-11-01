<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location: ../index.php");
}
?>
<?php
include_once '../../MODEL/genero.php';
include_once '../../BLL/bllGenero.php';

$genero = new \MODEL\genero();

$genero->setId($_POST['idInput']);
$genero->setDescricao($_POST['descInput']);

$bll = new \BLL\bllGenero();
$bll->update($genero);

header("location: lstGenero.php");
