<?php

include_once '../../BLL/bllDesenvolvedora.php';

include_once '../../BLL/bllGenero.php';

include_once '../../BLL/bllPublisher.php';


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
    <title>Create</title>

    <link href="../css/insert.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <style>
        .containerDev {
            height: fit-content !important;
        }
    </style>
</head>

<body>
    <?php include_once '../navbar2.php'; ?>

    <div class="pagina">
        <div class="containerGeral">
            <div class="titulo">
                <h1>INSERIR</h1>
            </div>
            <div class='containerDev'>
                <form method="POST" action="recinsJogo.php" id="formInsere">
                    <div class="mb-3">
                        <label for="nomeInput" class="textoInput form-label">Nome Do Jogo</label>
                        <input type="text" class="input form-control" id="nomeInput" name="nomeInput">
                    </div>
                    <div class="mb-3">
                        <label for="precoInput" class="textoInput form-label">Preço</label>
                        <input type="text" class="input form-control" id="precoInput" name="precoInput">
                    </div>
                    <div class="mb-3">
                        <label for="desenvolvedoraSelect" class="textoInput form-label">Desenvolvedora</label>
                        <select class="input form-select" name="desenvolvedoraSelect" id="desenvolvedoraSelect">
                            <option selected>Selecione uma opção</option>
                            <?php foreach ($lstDesenvolvedoras as $desenvolvedora) { ?>
                                <option value="<?php echo $desenvolvedora->getId() ?>"><?php echo $desenvolvedora->getNome() ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="publisherSelect" class="textoInput form-label">Publisher</label>
                        <select class="input form-select" name="publisherSelect" id="publisherSelect">
                            <option selected>Selecione uma opção</option>
                            <?php foreach ($lstPublishers as $publisher) { ?>
                                <option value="<?php echo $publisher->getId() ?>"><?php echo $publisher->getNome() ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="generoSelect" class="textoInput form-label">Genero</label>
                        <select class="input form-select" name="generoSelect" id="generoSelect">
                            <option selected>Selecione uma opção</option>
                            <?php foreach ($lstGeneros as $genero) { ?>
                                <option value="<?php echo $genero->getId() ?>"><?php echo $genero->getDescricao() ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="posBotoes">
                        <button type="submit" class="botaoConfirmar btn btn-primary">
                            <iconify-icon icon="memory:sword" style="color: white;" width="30" height="30"></iconify-icon>
                        </button>
                        <button type="reset" class="botaoRejeitar btn btn-primary">
                            <iconify-icon icon="memory:remove-circle" style="color: black;" width="30" height="30"></iconify-icon>
                        </button>
                    </div>
                </form>
            </div>
        </div>





    </div>

    <?php include_once '../footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>