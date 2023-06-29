<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location: ../index.php");
}
?>
<?php
include_once '../../BLL/bllPublisher.php';

$id = $_GET['id'];

$bll = new \BLL\bllPublisher();
$bll->delete($id);

header("location: lstPublisher.php");
