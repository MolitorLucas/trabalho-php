<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location: ../index.php");
}
?>
<?php
include_once '../../MODEL/desenvolvedora.php';
include_once '../../BLL/bllDesenvolvedora.php';

$desenvolvedora = new \MODEL\Desenvolvedora();

$desenvolvedora->setNome($_POST['nomeInput']);
$desenvolvedora->setOrigem($_POST['origemInput']);

if ($_POST['indieCheckBox'] != NULL) {
    $desenvolvedora->setIndie($_POST['indieCheckBox']);
} else {
    $desenvolvedora->setIndie(false);
}

$bll = new \BLL/bllDesenvolvedora();
$bll->insert($desenvolvedora);

header("location: lstDesenvolvedora.php");
