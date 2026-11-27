<?php
session_start();
require_once "conexao.php";

// Verifica se está logado
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

// Recebe os dados do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];

    $interesses = isset($_POST['interesses'])
        ? implode(",", $_POST['interesses'])
        : "";

    // Cadastro no banco
    $sql = $pdo->prepare("
        INSERT INTO clientes
        (nome, email, telefone, cpf, endereco, interesses)
        VALUES (?, ?, ?, ?, ?, ?)
    ");

    $sql->execute([
        $nome,
        $email,
        $telefone,
        $cpf,
        $endereco,
        $interesses
    ]);

    echo "<script>alert('Cliente cadastrado!');</script>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Clientes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f1f5f9;
        }

        .container {
            max-width: 700px;
            margin-top: 50px;
        }

        .card {
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 20px #ccc;
        }

        h2 {
            color: #2563eb;
            text-align: center;
            margin-bottom: 25px;
        }

        .btn-primary {
            width: 100%;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="card">

        <h2>Cadastro de Clientes</h2>

        <form method="POST">

            <label>Nome completo:</label>
            <input type="text" name="nome" class="form-control mb-3" required>

            <label>E-mail:</label>
            <input type="email" name="email" class="form-control mb-3" required>

            <label>Telefone:</label>
            <input type="text" name="telefone" class="form-control mb-3" required>

            <label>CPF:</label>
            <input type="text" name="cpf" class="form-control mb-3" required>

            <label>Endereço:</label>
            <input type="text" name="endereco" class="form-control mb-3" required>

            <label>Áreas de interesse:</label>

            <div class="form-check">
                <input type="checkbox" name="interesses[]" value="Tecnologia">
                Tecnologia
            </div>

            <div class="form-check">
                <input type="checkbox" name="interesses[]" value="Esportes">
                Esportes
            </div>

            <div class="form-check">
                <input type="checkbox" name="interesses[]" value="Música">
                Música
            </div>

            <div class="form-check">
                <input type="checkbox" name="interesses[]" value="Viagens">
                Viagens
            </div>

            <br>

            <button type="submit" class="btn btn-primary">
                Cadastrar Cliente
            </button>

        </form>

    </div>
</div>

</body>
</html>