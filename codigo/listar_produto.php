
<?php
require_once "conexao.php";

$sql = "SELECT * FROM produtos";

$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Produtos - Chaparral Pesca</title>

    <style>
        body {
            background-color: #e8eee9;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            margin: 30px auto;
            padding: 25px;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0px 4px 12px #00000030;
        }

        h1 {
            color: #17452c;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
        }

        th {
            background-color: #17452c;
            color: white;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f2f5f2;
        }

        a {
            color: #17452c;
            text-decoration: none;
        }

        .botao {
            display: inline-block;
            background-color: #d6a72c;
            color: white;
            padding: 10px 15px;
            border-radius: 6px;
            margin-top: 20px;
        }
    </style>

</head>

<body>

<div class="container">

    <h1>Chaparral Pesca</h1>

    <h3>Produtos Cadastrados</h3>

    <table>

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Estoque</th>
            <th>Foto</th>
            <th>Destaque</th>
            <th>Ações</th>
        </tr>

        <?php
        while ($produto = mysqli_fetch_array($resultado)) {
        ?>

        <tr>
            <td><?php echo $produto['idproduto']; ?></td>
            <td><?php echo $produto['nome']; ?></td>
            <td><?php echo $produto['descricao']; ?></td>
            <td>R$ <?php echo $produto['preco']; ?></td>
            <td><?php echo $produto['estoque']; ?></td>
            <td><?php echo $produto['foto']; ?></td>
            <td><?php echo $produto['destaque']; ?></td>

            <td>
                <a href="editar_produto.php?idproduto=<?php echo $produto['idproduto']; ?>">
                    Editar
                </a>
            </td>
        </tr>

        <?php
        }
        ?>

    </table>

    <a href="form_produto.php" class="botao">Cadastrar Produto</a>

    <a href="principal.php" class="botao">Voltar ao Menu</a>

</div>

</body>
</html>
