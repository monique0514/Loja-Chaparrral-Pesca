
<?php
require_once "conexao.php";

$idproduto = $_GET['idproduto'];

$sql = "SELECT * FROM produtos WHERE idproduto = ?";

$comando = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($comando, "i", $idproduto);

mysqli_stmt_execute($comando);

$resultado = mysqli_stmt_get_result($comando);

$produto = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Editar Produto - Chaparral Pesca</title>

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

    <h3>Editar Produto</h3>

    <form action="atualizar_produto.php" method="post">

        <input type="hidden" name="idproduto"
        value="<?php echo $produto['idproduto']; ?>">

        Nome:
        <input type="text" name="nome"
        value="<?php echo $produto['nome']; ?>">

        Descrição:
        <input type="text" name="descricao"
        value="<?php echo $produto['descricao']; ?>">

        Preço:
        <input type="text" name="preco"
        value="<?php echo $produto['preco']; ?>">

        Estoque:
        <input type="text" name="estoque"
        value="<?php echo $produto['estoque']; ?>">

        Foto:
        <input type="text" name="foto"
        value="<?php echo $produto['foto']; ?>">

        Destaque:
        <input type="text" name="destaque"
        value="<?php echo $produto['destaque']; ?>">

        ID da categoria:
        <input type="text" name="idcategoria"
        value="<?php echo $produto['idcategoria']; ?>">

        ID do fornecedor:
        <input type="text" name="idfornecedor"
        value="<?php echo $produto['idfornecedor']; ?>">

        ID da marca:
        <input type="text" name="idmarca"
        value="<?php echo $produto['idmarca']; ?>">

        <input type="submit" value="Salvar Alterações">

    </form>

    <a href="listar_produtos.php">Voltar</a>

</div>

</body>
</html>
