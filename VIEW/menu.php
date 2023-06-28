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
        width: 50%px;
        margin: 0 auto;
        padding: 20px ;
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

    .coluna{
        width: 10rem;
        height: 3rem;
        padding: 10px;
        background-color: blueviolet;
        margin-top: 20px;
        margin-right: auto;
        margin-left: auto;
        color: white;
        font-weight: 700;
        font-size: 16px !important;
        border-radius: 10px;
    }

    .pagina p{
        width: 70%;
        padding: 10px;
        text-align:justify ;
        text-justify: center;
        color: black;
        font-weight: 700;
        font-size:16px;
        margin-top: 10px;
        margin-right: auto;
        margin-left: auto;
    }

    .pagina h1 {
        margin-top: 20px;
        text-align: center ;
        text-justify: center;
        color: white;
        font-size: 75px;
        font-weight: 900;
    }

    </style>

</head>

<body>
    <?php include_once 'navbar.php'; ?>

    <div class="pagina">
        <div class="containerGeral row">

            <div class="container text-center">
            <div class="row row-cols-2">
            <button class='botaoMenu btn btn-sm btn-primary' onclick="JavaScript:location.href='DESENVOLVEDORA/insDesenvolvedora.php'">Inserir Desenvolvedores</button>
            <button class='botaoMenu btn btn-sm btn-primary' onclick="JavaScript:location.href='PUBLISHER/insPublisher.php'">Inserir Publishers</button>
            <button class='botaoMenu btn btn-sm btn-primary' onclick="JavaScript:location.href='JOGO/insJogo.php'">Inserir Jogos</button>
            <button class='botaoMenu btn btn-sm btn-primary' onclick="JavaScript:location.href='GENERO/insGenero.php'">Inserir Generos</button>
            </div>
            </div>

            <div class='soMuchTexo'>
                <h1>Administrativo Real Oficial</h1>
                <p>Bem-vindo(a) ao nosso site de informações sobre jogos! Aqui você encontrará uma variedade de tópicos relacionados a jogos, incluindo informações sobre publishers, desenvolvedoras e gêneros de jogos. Para facilitar a navegação, temos uma barra de navegação no topo da página, com botões específicos para cada tópico.</p>
                <p>Ao clicar no botão "Jogos" acima, você será direcionado(a) para uma página onde poderá inserir detalhes sobre jogos específicos. Preencha os campos solicitados com o título do jogo, data de lançamento, plataforma e outras informações relevantes. Essas informações serão armazenadas em nosso banco de dados para fornecer detalhes precisos sobre cada jogo.</p>
                <p>Se você estiver interessado em conhecer mais sobre as publishers, clique no botão "Publisher" acima. Lá você encontrará uma lista de publishers renomadas da indústria de jogos, juntamente com informações sobre suas atividades, histórico e jogos publicados. Explore a lista para descobrir mais sobre suas editoras favoritas.</p>
                <p>Da mesma forma, se quiser saber mais sobre as desenvolvedoras de jogos, clique no botão "Desenvolvedora" acima. Você encontrará uma lista de desenvolvedoras de jogos, desde grandes estúdios até desenvolvedores independentes. Descubra informações sobre os jogos que eles criaram, bem como sua história e abordagem única para o desenvolvimento de jogos.</p>
                <p>E se você estiver interessado em explorar diferentes gêneros de jogos, clique no botão "Gêneros" acima. Lá você encontrará uma lista abrangente de gêneros de jogos, desde ação e aventura até jogos de simulação e estratégia. Cada gênero terá uma breve descrição e exemplos de jogos populares dentro desse estilo.</p>
                <p>Nossa barra de navegação oferece acesso rápido às listas de jogos, publishers, desenvolvedoras e gêneros, para que você possa explorar facilmente as informações que procura. Esperamos que você encontre tudo o que precisa e desfrute de sua experiência em nosso site de informações sobre jogos!</p>
            </div>

        </div>
    </div>

    <?php include_once 'footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>