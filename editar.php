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
        <?php 
            require_once('app/conexao.php');  
            $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


            $sql = "SELECT cod_pessoa, nome, endereco, telefone, email, data_nascimento FROM pessoas where cod_pessoa = $id LIMIT 1";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            if(($stmt) AND ($stmt->rowCount() != 0)){
                $row_usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            }
        ?>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Cadastro</h1>
                    <!--Input para passar o id-->
                    <input type="hidden" name="id" id="cod_pessoa" value="<?php echo $row_usuario['cod_pessoa'] ?>">

                    <!--Input do formulário-->
                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $row_usuario['nome'] ?>">
                    </div>
            
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="endereco" value="<?php echo $row_usuario['endereco'] ?>" id="endereco" >
                    </div>
            
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" name="telefone" value="<?php echo $row_usuario['telefone'] ?>" id="telefone">
                    </div>
            
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $row_usuario['email'] ?>" id="email">
                    </div>
            
                    <div class="form-group">
                        <label for="data_nascimento">Data de Nascimento</label>
                        <input type="date" class="form-control" name="data_nascimento" value="<?php echo $row_usuario['data_nascimento'] ?>" id="data_nascimento">
                    </div><br>

                    <div class="form-group">
                        <button id="btnEditar" class="btn btn-info">Editar</button><br><br>
                        <span id="spResultado"></span>
                    </div>
                </div>
            </div>
        </div>  


        <!--Link do jquery-->
        <script src="./js/jquery-3.6.0.min.js"></script>

        <!--Script ajax-->
        <script src="./js/manipulando_jquery.js"></script>
    </body>
</html>