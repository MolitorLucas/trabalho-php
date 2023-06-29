<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location: ../index.php");
}
?>
<?php
include_once 'C:\xampp\htdocs\trabalho-php\BLL\blldesenvolvedora.php';
$id = $_GET['id'];

$bll = new  \BLL\bllDesenvolvedora();
$desenvolvedora = $bll->selectId($id);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>

    <link href="../css/insert.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

</head>

<body>
    <?php include_once '../navbar2.php'; ?>

    <div class="pagina">
        <div class="containerGeral">
            <div class="titulo">
                <h1>EDITAR: ID <?php echo $desenvolvedora->getId(); ?></h1>
            </div>
            <div class='containerDev'>
                <form method="POST" action="recEditDesenvolvedor.php" id="formInsere" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <input type="hidden" class="input form-control" id="idInput" name="idInput" value="<?php echo $id; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nomeInput" class="textoInput form-label">Nome Da Desenvolvedora:</label>
                        <input type="text" class="input form-control" id="nomeInput" name="nomeInput" required value="<?php echo $desenvolvedora->getNome() ?>">
                        <div class="invalid-feedback">
                            Digite um nome para a desenvolvedora
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="origemInput" class="textoInput form-label">País de Origem</label>
                        <input type="text" class="input form-control" id="origemInput" name="origemInput" required value="<?php echo $desenvolvedora->getOrigem() ?>">
                        <div class="invalid-feedback">
                            Digite um país de origem
                        </div>
                    </div>
                    <div class="form-check mb-3 ml-3 form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="indieCheckBox" name="indieCheckBox" <?php if ($desenvolvedora->isIndie()) {
                                                                                                                                    echo 'checked';
                                                                                                                                } ?>>
                        <label class="check form-check-label" for="indieCheckBox">Sua desenvolvedora é Indie?</label>
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
    <script>
        'use strict'

        var forms = document.querySelectorAll('.needs-validation')

        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })

        var origemInputElement = document.getElementById('origemInput');

        function validaOrigem() {

            origemInputElement.value = origemInputElement.value.replace(/\d/g, '');
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>