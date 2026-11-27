
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro de Clientes - Chaparral Pesca</title>

    <style>
        body {
            background-color: #e8eee9;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .container {
            width: 350px;
            margin: 50px auto;
            padding: 30px;
            background-color: white;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0px 4px 12px #00000030;
        }

        h1 {
            color: #17452c;
        }

        input[type="text"] {
            width: 90%;
            padding: 10px;
            margin: 8px 0 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #d6a72c;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #b88c1e;
        }

        a {
            display: block;
            margin-top: 20px;
            color: #17452c;
            text-decoration: none;
        }
    </style>

</head>

<body>

    <div class="container">

        <h1>Chaparral Pesca</h1>

        <h3>Cadastro de Clientes</h3>

        <form action="salvar_cliente.php" method="post">

            Nome: <br>
            <input type="text" name="nome"> <br>

            CPF: <br>
            <input type="text" name="cpf"> <br>

            Telefone: <br>
            <input type="text" name="telefone"> <br>

            E-mail: <br>
            <input type="text" name="email"> <br>

            Endereço: <br>
            <input type="text" name="endereco"> <br>

            <input type="submit" value="Cadastrar Cliente">

        </form>

        <a href="principal.php">Voltar ao menu</a>

    </div>

</body>
</html>
