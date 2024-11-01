<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location: ../index.php");
}
?>
<?php

use BLL\BllGenero;

include_once '/var/www/html/trabalho-php/BLL/bllGenero.php';

$bll = new \BLL\BllGenero();
if (isset($_GET['busca']))
    $busca = $_GET['busca'];
else $busca = null;

if ($busca == null)
    $lstGenero = $bll->select();
else $lstGenero = $bll->selectNome($busca);
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
    <title>Listar Generos</title>

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

        .bg {
            background-color: #f2f68d !important;
        }
    </style>

</head>

<body>

    <?php include_once '../navbar2.php'; ?>

    <div class='pagina'>
        <div class="containerGeral">

            <div class='containerDev'>

                <button class='botao btn btn-sm btn-primary' onclick="JavaScript:location.href='insGenero.php'">Inserir Gênero</button>

                <p class="h1 py-2 bg font-monospace text-center">
                    Listar Gêneros
                    <input type="text" id="busca" class="input form-control" style="width:33% !important" placeholder="Busque um gênero" value="<?php echo $busca?>">
                    <button class="btn btn-secondary btn-sm font-monospace" style="background-color: blueviolet !important;" onclick="JavaScript:location.href=`lstGenero.php?busca=${document.getElementById('busca').value}`;">
                        <iconify-icon icon="pixelarticons:search" height="20"></iconify-icon> Buscar
                    </button>
                </p>
                <table class="table table-dark table-stripped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center font-monospace">ID</th>
                            <th class="text-center font-monospace">DESCRIÇÃO</th>
                            <th class="text-center font-monospace">AÇÕES</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        foreach ($lstGenero as $genero) {
                        ?>
                            <tr>
                                <td class="text-center font-monospace"><?php echo $genero->getId(); ?></td>
                                <td class="text-center font-monospace"><?php echo $genero->getDescricao(); ?></td>
                                <td class="text-center font-monospace">
                                    <button class="btn btn-sm btn-info" onclick="JavaScript:location.href='detGenero.php?id=' +
                                     <?php echo $genero->getId(); ?>"><iconify-icon icon="memory:diamond"></iconify-icon></button>
                                    <button class="btn btn-sm btn-primary" onclick="JavaScript:location.href='editGenero.php?id=' +
                                     <?php echo $genero->getId(); ?>"><iconify-icon icon="memory:pickaxe"></iconify-icon></button>
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
                        <button type="button" class="btn btn-success" onclick="JavaScript:location.href='delGenero.php?id=' +
                                     <?php echo $genero->getId(); ?>">Sim!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <?php include_once '../footer.php'; ?>
</body>

</html>