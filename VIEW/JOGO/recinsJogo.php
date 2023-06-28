<?php
include_once '../../MODEL/jogo.php';
include_once '../../BLL/bllJogo.php';
include_once '../../BLL/bllDesenvolvedora.php';
include_once '../../BLL/bllGenero.php';
include_once '../../BLL/bllPublisher.php';

$jogo = new \MODEL\Jogo();

$jogo->setNome($_POST['nomeInput']);
$jogo->setPreco($_POST['precoInput']);

$bll = new \BLL\BllDesenvolvedora();
$devSelecionada = $bll->selectId($_POST['desenvolvedoraSelect']);
$jogo->setDesenvolvedora($devSelecionada);

$bll = new \BLL\BllGenero();
$genSelecionado = $bll->selectId($_POST['generoSelect']);
$jogo->setGenero($genSelecionado);

$bll = new \BLL\BllPublisher();
$pubSelecionada = $bll->selectId($_POST['publisherSelect']);
$jogo->setPublisher($pubSelecionada);


$bll = new \BLL\blljogo();
$bll->Insert($jogo);

header("location: lstjogo.php");
