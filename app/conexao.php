<?php
$dbname = 'mysql:host=localhost;dbname=empresa';
$user = 'root';
$pass = '';


$pdo = new PDO($dbname, $user, $pass);




$req = filter_input (INPUT_GET, "req", FILTER_SANITIZE_NUMBER_INT);

//Se $req for igual a 1 vai entrar no case 1
switch ($req) 
{
    case 1:
        //Cadastrando dados no Crud do sistema
        //Pegando os dados vindo do formulário via POST
        $nome = filter_input (INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $endereco = filter_input (INPUT_POST, "endereco", FILTER_SANITIZE_SPECIAL_CHARS);
        $telefone = filter_input (INPUT_POST, "telefone", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input (INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
        $data_nascimento = filter_input (INPUT_POST, "data_nascimento", FILTER_SANITIZE_SPECIAL_CHARS);

        //Criando código para enviar esses dados pegos para o banco
        $sql = 'INSERT INTO pessoas (nome, endereco, telefone, email, data_nascimento) VALUES (:nome, :endereco, :telefone, :email, :data_nascimento)';
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':data_nascimento', $data_nascimento);
        $stmt->execute();

        if($stmt->rowCount() >= 1)
        {
            $resultado = "<div class='alert alert-success'>Usuário cadastrado com sucesso!!</div>";
        }
        
        print($resultado);
    break;

    case 2:
        //Criando Update no Crud do sistema
        //Pegando dados para editar
        $id = filter_input(INPUT_POST, 'cod_pessoa', FILTER_SANITIZE_NUMBER_INT);
        $nome = filter_input (INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $endereco = filter_input (INPUT_POST, "endereco", FILTER_SANITIZE_SPECIAL_CHARS);
        $telefone = filter_input (INPUT_POST, "telefone", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input (INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
        $data_nascimento = filter_input (INPUT_POST, "data_nascimento", FILTER_SANITIZE_SPECIAL_CHARS);

        //E vamos criar a variável $sql aqui também, mas agora recebendo um código sql de UPDATE
        //Para inserir no banco de dados os novos dados que surgiram ao editarmos os registros
        $sql = "UPDATE pessoas SET nome=:nome, endereco=:endereco, telefone=:telefone, email=:email, data_nascimento=:data_nascimento WHERE cod_pessoa=:id";

        $stmt_update = $pdo->prepare($sql);

        $stmt_update->bindParam(':id', $id);
        $stmt_update->bindParam(':nome', $nome);
        $stmt_update->bindParam(':endereco', $endereco);
        $stmt_update->bindParam(':telefone', $telefone);
        $stmt_update->bindParam(':email', $email);
        $stmt_update->bindParam(':data_nascimento', $data_nascimento);

        $stmt_update->execute();
    break;

    case 3:
        //Criando Delete no Crud do sistema
        //Pegando o id para deletar
        $id = filter_input(INPUT_POST, 'cod_pessoa', FILTER_SANITIZE_NUMBER_INT);

        $sql = "DELETE FROM pessoas WHERE cod_pessoa=:id";
        $stmt_delete = $pdo->prepare($sql);
        $stmt_delete->bindParam(':id', $id);
        $stmt_delete->execute();
    break;
}



//Lendo dados do banco
$sql = "SELECT * FROM pessoas";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$exibir_dados = $stmt->fetchAll();
