
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Chaparral Pesca - Página Principal</title>

    <style>
        body {
            background-color: #e8eee9;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 400px;
            margin: 80px auto;
            background-color: white;
            padding: 35px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0px 4px 12px #00000030;
        }

        h1 {
            color: #17452c;
        }

        p {
            color: #666;
        }

        a {
            display: block;
            background-color: #17452c;
            color: white;
            padding: 13px;
            margin-top: 15px;
            border-radius: 6px;
            text-decoration: none;
        }

        a:hover {
            background-color: #286b43;
        }

        .sair {
            background-color: #d6a72c;
            color: white;
        }

        .sair:hover {
            background-color: #b88c1e;
        }
    </style>

</head>

<body>

    <div class="container">

        <h1>Chaparral Pesca</h1>

        <p>Bem-vindo ao sistema da nossa loja!</p>

        <h3>Menu Principal</h3>

        <a href="form_produto.php">Cadastrar Produtos</a>

        <a href="listar_produtos.php">Listar Produtos</a>

        <a href="form_cliente.php">Cadastrar Clientes</a>

        <a href="listar_clientes.php">Listar Clientes</a>

        <a href="form_venda.php">Registrar Venda</a>

        <a href="logout.php" class="sair">Sair do Sistema</a>

    </div> 

</body>
</html>
