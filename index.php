<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Empresa</title>


        <!--Link do jquery-->
        <script src="./js/jquery-3.6.0.min.js" defer></script>

        <!--Link do Manipulando jquery-->
        <script src="./js/manipulando_jquery.js" defer></script>

        <!--Link do bootstrap-->
        <link rel="stylesheet" type="text/css" href="./bootstrap-5.1.3-dist/css/bootstrap.min.css" />

        <!--Link do js bootstrap-->
        <script src="./bootstrap-5.1.3-dist/js/bootstrap.min.js" defer></script>

        <!--Link do css-->
        <link rel="stylesheet" type="text/css" href="./css/estilo.css" />
    </head>

    <body>
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container-fluid">

            <!--Menu-Sanduiche-->
            <button type="button" class="btn btn-primary btn-sanduiche" id="btn-sanduiche">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16" id="traco-menu">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
            </button>

            <a class="navbar-brand fw-bold" href="index.php">EMPRESA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
            </div>
            </div>
        </nav>


        <!--Menu lateral-->
        <ul class="nav flex-column nav-menu" id="nav-menu">
            <li class="nav-item">
                <a class="nav-link active nav-link1" aria-current="page" href="consulta.php">
                    <!--Icone Cadastros-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    </svg>
                </a>
                <a href="consulta.php" class="btn btn-primary btnconsult" id="btnConsult">Consultar</a>
            </li>
        </ul>
    </body>
</html>