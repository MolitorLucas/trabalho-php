<?php
include_once '../../MODEL/publisher.php';
include_once '../../BLL/bllPublisher.php';

$publisher = new \MODEL\Publisher();

$publisher->setId($_POST['idInput']);
$publisher->setNome($_POST['nomeInput']);

$bll = new \BLL\BllPublisher();
$bll->update($publisher);

header("location: lstPublisher.php");
