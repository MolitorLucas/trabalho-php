<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location: ../index.php");
}
?>
<?php
include_once '../../MODEL/genero.php';
include_once '../../BLL/bllGenero.php';

$genero = new \MODEL\Genero();

$genero->setDescricao($_POST['descInput']);

$bll = new \BLL\bllGenero();
$bll->insert($genero);

header("location: lstGenero.php");
