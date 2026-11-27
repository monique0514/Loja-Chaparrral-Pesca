
<?php
require_once "conexao.php";

$idcliente = $_GET['idcliente'];

$sql = "SELECT * FROM clientes WHERE idcliente = ?";
$comando = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($comando, "i", $idcliente);
mysqli_stmt_execute($comando);

$resultado = mysqli_stmt_get_result($comando);
$cliente = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Editar Cliente - Chaparral Pesca</title>

    <style>
        body {
            background-color: #e8eee9;
            font-family: Arial;
        }

        .container {
            width: 350px;
            margin: 50px auto;
            padding: 30px;
            background-color: white;
            border-radius: 12px;
            text-align: center;
        }

        h1 {
            color: #17452c;
        }

        input {
            padding: 10px;
            margin: 8px;
            width: 90%;
        }

        input[type="submit"] {
            background-color: #d6a72c;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Chaparral Pesca</h1>
    <h3>Editar Cliente</h3>

    <form action="salvar_edicao_cliente.php" method="post">

        <input type="hidden" name="idcliente"
        value="<?php echo $cliente['idcliente']; ?>">

        Nome:
        <input type="text" name="nome"
        value="<?php echo $cliente['nome']; ?>">

        CPF:
        <input type="text" name="cpf"
        value="<?php echo $cliente['cpf']; ?>">

        Telefone:
        <input type="text" name="telefone"
        value="<?php echo $cliente['telefone']; ?>">

        E-mail:
        <input type="text" name="email"
        value="<?php echo $cliente['email']; ?>">

        Endereço:
        <input type="text" name="endereco"
        value="<?php echo $cliente['endereco']; ?>">

        <input type="submit" value="Salvar Alterações">

    </form>

    <a href="listar_clientes.php">Voltar</a>

</div>

</body>
</html>
