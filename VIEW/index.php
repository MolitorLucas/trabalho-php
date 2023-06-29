<?php
session_start();
unset($_SESSION['login']);
session_destroy();
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
            height: 650px;
        }

        .box-login {
            width: 300px;
            height: 425px;
            flex-direction: column;
            border-radius: 25px;
        }

        input {
            border-radius: 10px !important;
        }

        button {
            margin-right: 35px !important;
            margin-left: auto !important;
        }

        nav {
            height: 75px;
        }

        .user {
            border: 5px solid white;
            border-radius: 10px;
        }
    </style>

    <link href="css/insert.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <?php include_once 'navbar3.php'; ?>
    <div class='pagina'>
        <div class="containerGeral">



            <link href="../css/insert.css" rel="stylesheet">
            <div class="container-login text-center">
                <div class="box-login row-3 bg-dark ">
                    <br>
                    <div class='user'>
                        <iconify-icon icon="memory:account" style="color: white;" width="100" height="100"></iconify-icon>
                    </div>
                    <form method="POST" action="login.php" class="needs-validation" novalidate>
                        <div class="usuario my-2">
                            <div class="">
                                <label for="user" class="control-label text-white font-monospace">Nome de usuário:</label>
                            </div>
                            <div class="">
                                <input id="user" name="usuario" type="text" class="form-control font-monospace" required />
                                <div class="invalid-feedback">
                                    Digite o nome de usuário
                                </div>
                            </div>
                        </div>
                        <div class="senha my-2">
                            <div class="">
                                <label for="password" class="control-label text-white font-monospace">Senha:</label>
                            </div>
                            <div class="">
                                <input id="password" name="senha" type="password" class="form-control font-monospace" required />
                                <div class="invalid-feedback">
                                    Digite a senha
                                </div>
                            </div>
                        </div>
                        <div class="posBotoes">
                            <button type="submit" class="botaoConfirmar btn btn-primary"><iconify-icon icon="memory:play" style="color: white;" width="30" height="30"></iconify-icon></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include_once 'footer.php'; ?>

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