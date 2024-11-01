<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location: ../index.php");
}
?>
<?php
include_once '../../BLL/bllGenero.php';

$id = $_GET['id'];

$bll = new \BLL/bllGenero();
$bll->delete($id);

header("location: lstGenero.php");
