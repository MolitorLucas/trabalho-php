<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>

    <link href="../../css/desenvolvedora.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>

<body>


    <div class='containerDev'>
    <form>
    <div class="mb-3">
        <label for="nomeInput" class="textoInput form-label">Nome</label>
        <input type="nome" class="input form-control" id="nomeInput" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="oritemInput" class="textoInput form-label">Origem</label>
        <input type="origem" class="input form-control" id="oritemImput">
    </div>
    <div class="form-check mb-3 ml-3 form-switch">
    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
    <label class="check form-check-label" for="flexSwitchCheckDefault">Sua desenvolvedora é Indie?</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>