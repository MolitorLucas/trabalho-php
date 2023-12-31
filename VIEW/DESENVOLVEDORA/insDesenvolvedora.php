<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERIR</title>

    <link href="../css/insert.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>


</head>

<body>
    <?php include_once '../navbar2.php'; ?>

    <div class="pagina">
        <div class="containerGeral">
            <div class="titulo">
                <h1>INSERIR</h1>
            </div>
            <div class='containerDev'>
                <form class="needs-validation" novalidate method="POST" action="recinsDesenvolvedor.php" id="formInsere">
                    <div class="mb-3">
                        <label for="nomeInput" class="textoInput form-label">Nome Da Desenvolvedora</label>
                        <input type="text" class="input form-control" id="nomeInput" name="nomeInput" required>
                        <div class="invalid-feedback">
                            Digite um nome para a desenvolvedora
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="origemInput" class="textoInput form-label">País de Origem</label>
                        <input type="text" oninput="JavaScript:validaOrigem()" class="input form-control" id="origemInput" name="origemInput" required minlength="3">
                        <div class="invalid-feedback">
                            Digite um país de origem
                        </div>
                    </div>
                    <div class="form-check mb-3 ml-3 form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="indieCheckBox" name="indieCheckBox">
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
    </div>

    <?php include_once '../footer.php'; ?>
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