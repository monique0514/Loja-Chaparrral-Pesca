
<?php
require_once "conexao.php";

$idcliente = $_POST['idcliente'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];

$sql = "UPDATE clientes SET nome = ?, cpf = ?, telefone = ?, email = ?, endereco = ? WHERE idcliente = ?";

$comando = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($comando, "sssssi", $nome, $cpf, $telefone, $email, $endereco, $idcliente);

mysqli_stmt_execute($comando);

header("Location: listar_clientes.php");
?>
