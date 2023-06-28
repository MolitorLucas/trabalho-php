<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERIR</title>

    <link href="css/insert.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <style>

    .containerGeral{
        flex-direction: row !important;
    }
    .soMuchTexto{
        margin: 0 auto;
    }
    .listas{
       gap: 100px;
        justify-items: center;
        alig-items: center;
        flex-direction: column;
        background-color: red;
        width: 900px;
        height: 900px;
    }

    .col{
        width: 20%;
        height: 20%;
        padding: 10px;
        background-color: blueviolet;
        margin-right: auto;
        margin-left: auto;
        color: white;
        font-weight: 700;
        font-size: 16px !important;
        border-radius: 10px;
    }

    </style>

</head>

<body>
    <?php include_once 'navbar.php'; ?>

    <div class="pagina">
        <div class="containerGeral row">
            <div class='soMuchTexo'>
                <h1>tees</h1>
                <p>tttttttttttttttttt</p>
            </div>

            <div class="container text-center">
            <div class="row row-cols-2">
                <div class="col">Column</div>
                <div class="col">Column</div>
                <div class="col">Column</div>
                <div class="col">Column</div>
            </div>
            </div>

            
    
    
    
    
    
    
        </div>
    </div>

    <?php include_once 'footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>