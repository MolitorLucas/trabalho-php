<?php
include_once '../../BLL/bllJogo.php';

$id = $_GET['id'];

$bll = new \BLL\bllJogo();
$bll->delete($id);

header("location: lstJogo.php");
