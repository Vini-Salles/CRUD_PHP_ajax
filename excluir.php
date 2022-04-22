<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Empresa</title>

        <!--Link do jquery-->
        <script src="./js/jquery-3.6.0.min.js" defer></script>

        <!--Link do bootstrap-->
        <link rel="stylesheet" type="text/css" href="./bootstrap-5.1.3-dist/css/bootstrap.min.css" />

        <!--Link do js bootstrap-->
        <script src="./bootstrap-5.1.3-dist/js/bootstrap.min.js" defer></script>
    </head>

    <body>

        <div class="row container">
            <div class="row mt-5 col-12 card-header text-center position-fixed">
                <h3 class="light">Deseja realmente excluir este registro?</h3>


                <!--Pegando o id da url-->
                <?php $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT); ?>

                <!--Input para passar o id-->
                <input type="hidden" name="id" id="cod_pessoa" value="<?php echo $id ?>">
                <p>
                    <a id="deletar" class="btn btn-primary">Sim</a>
                    <a href="consulta.php" class="btn btn-danger">Não</a><br>

                    <span id="spResultado"></span>
                </p>
            </div>
        </div>



        <!--Link do jquery-->
        <script src="./js/jquery-3.6.0.min.js"></script>

        <!--Script ajax-->
        <script src="./js/manipulando_jquery.js"></script>
    </body>
</html>