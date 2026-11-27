
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaparral Pesca</title>

    <style>
        body {
            background-color: #e8eee9;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 350px;
            margin: 100px auto;
            background-color: white;
            padding: 35px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0px 4px 12px #00000030;
        }

        h1 {
            color: #17452c;
            margin-bottom: 10px;
        }

        p {
            color: #666;
            margin-bottom: 25px;
        }

        input[type="text"] {
            width: 90%;
            padding: 12px;
            margin: 8px 0 18px;
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

        a:hover {
            text-decoration: underline;
        }
    </style>

</head>

<body>

    <div class="container">

        <h1>Chaparral Pesca</h1>

        <p>Bem-vindo à nossa loja!</p>

        <form action="verificar_login.php" method="post">

            E-mail: <br>
            <input type="text" name="email" placeholder="Digite seu e-mail"> <br>

            Senha: <br>
            <input type="text" name="senha" placeholder="Digite sua senha"> <br>

            <input type="submit" value="Entrar">

        </form>

        <a href="form_usuario.php">Não tenho cadastro. Cadastre-se!</a>

    </div>

</body>

</html>
