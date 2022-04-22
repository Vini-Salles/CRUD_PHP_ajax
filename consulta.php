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
        
        <!--Header-->
        <div class="container">
            <div class="row">
                <div class="col">
                    <div>
                        <h1 class="display-4">Consulta</h1>
                        <p class="lead">
                            Esta é a página de consulta do sisema.
                        </p>
                        <hr class="my-4">

                        <!--Botão de voltar-->
                        <a class="btn btn-primary" href="index.php" role="button">Voltar</a>

                        <!--Botão cadastrar que abre o modal de cadastro-->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Cadastrar
                        </button>
                    </div>
                </div>
            </div>
        </div><br><br>



        <!--Tabela para mostrar os dados do banco-->
        <div class="container">
                <table class="table table-hover">
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Endereco</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Data Nascimento</th>
                        <th>Ações</th>
                    </tr>

                    <?php require_once('app/conexao.php'); $consulta = $exibir_dados; ?>
                    <?php foreach ($consulta as $registro): ?>
                        <tr>
                            <td><?php echo $registro['cod_pessoa'] ?></td>
                            <td><?php echo $registro['nome'] ?></td>
                            <td><?php echo $registro['endereco'] ?></td>
                            <td><?php echo $registro['telefone'] ?></td>
                            <td><?php echo $registro['email'] ?></td>
                            <td><?php echo $registro['data_nascimento'] ?></td>

                            <td>
                                <!--Links para editar ou excluir os registros-->
                                <!--Ao clicar em editar vai abrir o mesmo modal de cadastro, só que exibindo todos os dados daquela pessoa-->
                                <?php echo "<a href=editar.php?id=$registro[cod_pessoa]>Editar</a>" ?> |
                                <?php echo "<a href=excluir.php?id=$registro[cod_pessoa]>Deletar</a>" ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </table>

            </div>




        <!--Modal Cadastro-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <!--Conteúdo do modal-->
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h1>Cadastro</h1>
                                <div class="form-group">
                                    <label for="nome">Nome Completo</label>
                                    <input type="text" class="form-control" id="nome">
                                </div>
            
                                <div class="form-group">
                                    <label for="endereco">Endereço</label>
                                    <input type="text" class="form-control" id="endereco" >
                                </div>
            
                                <div class="form-group">
                                    <label for="telefone">Telefone</label>
                                    <input type="text" class="form-control" id="telefone">
                                </div>
            
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
            
                                <div class="form-group">
                                    <label for="data_nascimento">Data de Nascimento</label>
                                    <input type="date" class="form-control" id="data_nascimento">
                                </div>
            
                                <br>
                                <div class="form-group">
                                    <button id="btnCadastrar" class="btn btn-info">Cadastrar</button><br><br>
                                    <span id="spResultado"></span>
                                </div>
            
                                <div class="resultado">
                                </div>
                            </div>
                        </div>
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