<?php
include_once 'C:\xampp\htdocs\trabalho-php\BLL\bllJogo.php';

include_once '../../BLL/bllDesenvolvedora.php';

include_once '../../BLL/bllGenero.php';

include_once '../../BLL/bllPublisher.php';
$id = $_GET['id'];

$bll = new  \BLL\bllJogo();
$jogo = $bll->selectId($id);


$bll = new \BLL\BllDesenvolvedora();
$lstDesenvolvedoras = $bll->select();
$bll = new \BLL\BllGenero();
$lstGeneros = $bll->select();
$bll = new \BLL\BllPublisher();
$lstPublishers = $bll->select();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETALHES</title>

    <link href="../css/insert.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

</head>

<body>
    <?php include_once '../navbar2.php'; ?>

    <div class="pagina">
        <div class="containerGeral">
            <div class="titulo">
                <h1>DETALHE: ID <?php echo $jogo->getId(); ?></h1>
            </div>
            <div class='containerDev'>
                <div class="mb-3">
                    <label for="nomeInput" class="textoInput form-label">Nome do Jogo</label>
                    <input type="text" class="input form-control" id="nomeInput" name="nomeInput" readonly value="<?php echo $jogo->getNome() ?>">
                </div>
                <div class="mb-3">
                    <label for="precoInput" class="textoInput form-label">Preço do Jogo</label>
                    <input type="number" class="input form-control" id="precoInput" name="precoInput" readonly value="<?php echo $jogo->getPreco() ?>">
                </div>

                <div class="mb-3">
                    <label for="desenvolvedoraSelect" class="textoInput form-label">Desenvolvedora</label>
                    <input class="input form-select" name="desenvolvedoraSelect" id="desenvolvedoraSelect" readonly value="<?php echo $jogo->getDesenvolvedora()->getNome() ?>">
                </div>
                <div class="mb-3">
                    <label for="publisherSelect" class="textoInput form-label">Publisher</label>
                    <input class="input form-select" name="publisherSelect" id="publisherSelect" readonly value="<?php echo $jogo->getPublisher()->getNome() ?>">
                </div>
                <div class=" mb-3">
                    <label for="generoSelect" class="textoInput form-label">Genero</label>
                    <input readonly class="input form-select" name="generoSelect" id="generoSelect" value="<?php echo $jogo->getGenero()->getDescricao() ?>">
                </div>
            </div>
        </div>
    </div>

    <?php include_once '../footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>