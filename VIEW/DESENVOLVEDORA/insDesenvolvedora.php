<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>

    <link href="../css/desenvolvedora.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

</head>

<body>
<?php include_once '../navbar.php';?>

<div class="pagina">
    <div class="containerGeral">
                <div class="titulo">
                    <h1>INSERIR</h1>
                </div>
                <div class='containerDev'>
                    <form method="POST" action="recinsDesenvolvedor.php" id="formInsere">
                    <div class="mb-3">
                        <label for="nomeInput" class="textoInput form-label">Nome Da Desenvolvedora</label>
                        <input type="nome" class="input form-control" id="nomeInput" name="nomeInput">
                    </div>
                    <div class="mb-3">
                        <label for="origemInput" class="textoInput form-label">País de Origem</label>
                        <input type="origem" class="input form-control" id="origemInput" name="origemInput">
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
                        </form>
                    </div>
    </div>

    
        
    

</div>

<?php include_once '../footer.php';?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>