<?php
include_once '../../BLL/bllPublisher.php';

$id = $_GET['id'];

$bll = new \BLL\bllPublisher();
$bll->delete($id);

header("location: lstPublisher.php");
