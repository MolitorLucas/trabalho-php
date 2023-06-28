<?php

use BLL\BllDesenvolvedora;

include_once 'C:\xampp\htdocs\trabalho-php\BLL\bllDesenvolvedora.php';

$bll = new BllDesenvolvedora();
$lstDesenvolvedora = $bll->select();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <title>Listar desenvolvedoras</title>
</head>

<body>
    <div class="container">
        <p class="h1 py-2 bg-warning font-monospace text-center">Listar Desenvolvedoras</p>
        <table class="table table-dark table-stripped table-hover">
            <thead>
                <tr>
                    <th class="text-center font-monospace">ID</th>
                    <th class="text-center font-monospace">NOME</th>
                    <th class="text-center font-monospace">ORIGEM</th>
                    <th class="text-center font-monospace">INDIE</th>
                    <th class="text-center font-monospace">AÇÕES</th>
                </tr>

            </thead>
            <tbody>
                <?php
                foreach ($lstDesenvolvedora as $desenvolvedora) {
                ?>
                    <tr>
                        <td class="text-center font-monospace"><?php echo $desenvolvedora->getId(); ?></td>
                        <td class="text-center font-monospace"><?php echo $desenvolvedora->getNome(); ?></td>
                        <td class="text-center font-monospace"><?php echo $desenvolvedora->getOrigem(); ?></td>
                        <td class="text-center font-monospace"><?php echo ($desenvolvedora->isIndie() ? 'SIM' : 'NÃO'); ?></td>
                        <td class="text-center font-monospace">
                            <button class="btn btn-sm btn-info" onclick="JavaScript:location.href='detDesenvolvedora.php?id=' +
                                     <?php echo $desenvolvedora->getId(); ?>"><iconify-icon icon="memory:diamond"></iconify-icon></button>
                            <button class="btn btn-sm btn-primary" onclick="JavaScript:location.href='editDesenvolvedora.php?id=' +
                                     <?php echo $desenvolvedora->getId(); ?>"><iconify-icon icon="memory:pickaxe" ></iconify-icon></button>
                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalExcluir"><iconify-icon icon="memory:skull"></iconify-icon></button>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>

        </table>
    </div>
    <script>
    function remover(id) {
        if (confirm('Excluir a Desenvolvedora ' + id + '?')) {
            location.href = 'delDesenvolvedora.php?id=' + id;
        }
    }
    </script>

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
            <button type="button" class="btn btn-success" onclick="JavaScript:location.href='delDesenvolvedora.php?id=' +
                                     <?php echo $desenvolvedora->getId(); ?>">Sim!</button>
        </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>