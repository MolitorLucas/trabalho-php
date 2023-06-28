<?php

use BLL\bllJogo;

include_once 'C:\xampp\htdocs\trabalho-php\BLL\bllJogo.php';

$bll = new \BLL\bllJogo();
$lstJogo = $bll->select();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../css/insert.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <title>Listar Jogos</title>

    <style>
        .containerDev {
            background-color: white !important;
            width: 75%;
            height: 1000px !important;
            padding: 5.5%;
            margin-left: auto;
            margin-right: auto;
            border-radius: 20px 20px 20px 20px !important;
            box-shadow: 0px 0px #f2f68d !important;
        }

        .botao {
            background-color: blueviolet !important;
            border-Radius: 10px 10px 0px 0px;
            width: 100%;
            align-items: center;
            justify-items: center;
            font-weight: 700;
            font-size: 16px;
        }
    </style>

</head>

<body>

    <?php include_once '../navbar.php'; ?>

    <div class='pagina'>
        <div class="containerGeral">

            <div class='containerDev'>

                <button class='botao btn btn-sm btn-primary' onclick="JavaScript:location.href='insJogo.php'">Inserir Jogo</button>

                <p class="h1 py-2 bg-warning font-monospace text-center">Listar Jogos</p>
                <table class="table table-dark table-stripped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center font-monospace">ID</th>
                            <th class="text-center font-monospace">NOME</th>
                            <th class="text-center font-monospace">PREÇO</th>
                            <th class="text-center font-monospace">DESENVOLVEDORA</th>
                            <th class="text-center font-monospace">PUBLISHER</th>
                            <th class="text-center font-monospace">GENERO</th>
                            <th class="text-center font-monospace">AÇÕES</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        foreach ($lstJogo as $jogo) {
                        ?>
                            <tr>
                                <td class="text-center font-monospace"><?php echo $jogo->getId(); ?></td>
                                <td class="text-center font-monospace"><?php echo $jogo->getNome(); ?></td>
                                <td class="text-center font-monospace"><?php echo $jogo->getPreco(); ?></td>
                                <td class="text-center font-monospace"><?php echo $jogo->getDesenvolvedora()->getNome(); ?></td>
                                <td class="text-center font-monospace"><?php echo $jogo->getPublisher()->getNome(); ?></td>
                                <td class="text-center font-monospace"><?php echo $jogo->getGenero()->getDescricao(); ?></td>
                                <td class="text-center font-monospace">
                                    <button class="btn btn-sm btn-info" onclick="JavaScript:location.href='detJogo.php?id=' +
                                     <?php echo $jogo->getId(); ?>"><iconify-icon icon="memory:diamond"></iconify-icon></button>
                                    <button class="btn btn-sm btn-primary" onclick="JavaScript:location.href='editJogo.php?id=' +
                                     <?php echo $jogo->getId(); ?>"><iconify-icon icon="memory:pickaxe"></iconify-icon></button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalExcluir"><iconify-icon icon="memory:skull"></iconify-icon></button>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>

        <div class="modal fade" id="modalExcluir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalExcluirLabel">EXCLUSÃO</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Deseja realmente excluir?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Não!</button>
                        <button type="button" class="btn btn-success" onclick="JavaScript:location.href='delJogo.php?id=' +
                                     <?php echo $jogo->getId(); ?>">Sim!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <?php include_once '../footer.php'; ?>
</body>

</html>