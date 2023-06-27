<?php
include_once '../../MODEL/publisher.php';
include_once '../../BLL/bllPublisher.php';

$publisher = new \MODEL\Publisher();

$publisher->setNome($_POST['nomeInput']);

$bll = new \BLL\bllPublisher();
$bll->Insert($publisher);

header("location: lstPublisher.php");
