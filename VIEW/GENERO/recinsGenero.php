<?php
include_once '../../MODEL/genero.php';
include_once '../../BLL/bllGenero.php';

$genero = new \MODEL\Genero();

$genero->setDescricao($_POST['descInput']);

$bll = new \BLL\bllGenero();
$bll->Insert($genero);

header("location: lstGenero.php");
