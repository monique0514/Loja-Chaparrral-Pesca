
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Menu - Chaparral Pesca</title>

    <style>
        body {
            background-color: #e8eee9;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .menu {
            width: 350px;
            margin: 80px auto;
            padding: 30px;
            background-color: white;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0px 4px 12px #00000030;
        }

        h1 {
            color: #17452c;
        }

        a {
            display: block;
            padding: 12px;
            margin: 12px 0;
            background-color: #17452c;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        a:hover {
            background-color: #286b43;
        }

        .sair {
            background-color: #d6a72c;
        }
    </style>

</head>

<body>

    <div class="menu">

        <h1>Chaparral Pesca</h1>

        <h3>Menu Principal</h3>

        <a href="principal.php">Início</a>

        <a href="form_produto.php">Cadastrar Produtos</a>

        <a href="listar_produtos.php">Listar Produtos</a>

        <a href="form_cliente.php">Cadastrar Clientes</a>

        <a href="listar_clientes.php">Listar Clientes</a>

        <a href="form_venda.php">Registrar Venda</a>

        <a href="logout.php" class="sair">Sair do Sistema</a>

    </div>

</body>
</html>
