<?php

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <style>
        .container-login,
        .box-login {
            display: flex;
            margin: auto;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            width: 100vw;
            height: 100vh;
        }

        .box-login {
            width: 300px;
            height: 300px;
            flex-direction: column;
            border-radius: 25px;
        }

        input {
            border-radius: 10px !important;
        }

        button {
            border-left: 12.5px solid #DB00FF !important;
            border-radius: 50px !important;
        }

        nav {
            height: 75px;
        }
    </style>
    <title>Login</title>
</head>

<body>
    <nav class="navbar text-white navbar-dark bg-dark">
    </nav>
    <div class="container-login text-center">
        <div class="box-login bg-dark">
            <form method="POST" action="login.php">
                <div class="usuario my-2">
                    <div class="">
                        <label for="user" class="control-label text-white font-monospace">Nome de usuário:</label>
                    </div>
                    <div class="">
                        <input id="user" name="usuario" type="text" class="form-control font-monospace" />
                    </div>
                </div>
                <div class="senha my-2">
                    <div class="">
                        <label for="password" class="control-label text-white font-monospace">Senha:</label>
                    </div>
                    <div class="">
                        <input id="password" name="senha" type="password" class="form-control font-monospace" />
                    </div>
                </div>
                <div class="botao my-2">
                    <button type="submit" name="action" class="btn btn-warning text-white"><iconify-icon width="24" icon="memory:play"></iconify-icon></button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>