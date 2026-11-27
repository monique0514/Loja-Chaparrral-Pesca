
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro de Produtos - Chaparral Pesca</title>

    <style>
        body {
            background-color: #e8eee9;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 350px;
            margin: 40px auto;
            padding: 30px;
            background-color: white;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0px 4px 12px #00000030;
        }

        h1 {
            color: #17452c;
        }

        input {
            width: 90%;
            padding: 10px;
            margin: 8px 0 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #d6a72c;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
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

        <h3>Cadastro de Produtos</h3>

        <form action="salvar_produto.php" method="post">

            Nome do produto:
            <input type="text" name="nome" placeholder="Nome do produto">

            Descrição:
            <input type="text" name="descricao" placeholder="Descrição">

            Preço:
            <input type="text" name="preco" placeholder="Preço">

            Estoque:
            <input type="text" name="estoque" placeholder="Quantidade">

            Foto:
            <input type="text" name="foto" placeholder="Nome da foto">

            Destaque:
            <input type="text" name="destaque" placeholder="0 ou 1">

            ID da categoria:
            <input type="text" name="idcategoria" placeholder="ID da categoria">

            ID do fornecedor:
            <input type="text" name="idfornecedor" placeholder="ID do fornecedor">

            ID da marca:
            <input type="text" name="idmarca" placeholder="ID da marca">

            <input type="submit" value="Cadastrar Produto">

        </form>

        <a href="principal.php">Voltar ao menu</a>

    </div>

</body>
</html>
