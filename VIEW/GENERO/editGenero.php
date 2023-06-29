<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location: ../index.php");
}
?>
<?php
include_once 'C:\xampp\htdocs\trabalho-php\BLL\bllGenero.php';
$id = $_GET['id'];

$bll = new  \BLL\bllGenero();
$genero = $bll->selectId($id);

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
                <h1>EDITAR: ID <?php echo $genero->getId(); ?></h1>
            </div>
            <div class='containerDev'>
                <form method="POST" action="recEditGenero.php" id="formInsere" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <input type="hidden" class="input form-control" id="idInput" name="idInput" required value="<?php echo $id; ?>">
                        <div class="invalid-feedback">
                            Digite uma descrição para o Gênero
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="descInput" class="textoInput form-label">Descrição do Gênero:</label>
                        <input type="text" class="input form-control" id="descInput" name="descInput" value="<?php echo $genero->getDescricao() ?>">
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
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>