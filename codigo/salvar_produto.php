
<?php
    require_once "conexao.php";

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];
    $foto = $_POST['foto'];
    $destaque = $_POST['destaque'];
    $idcategoria = $_POST['idcategoria'];
    $idfornecedor = $_POST['idfornecedor'];
    $idmarca = $_POST['idmarca'];

    $sql = "INSERT INTO produtos (nome, descricao, preco, estoque, foto, destaque, idcategoria, idfornecedor, idmarca) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, "ssdisiiii", $nome, $descricao, $preco, $estoque, $foto, $destaque, $idcategoria, $idfornecedor, $idmarca);

    mysqli_stmt_execute($comando);

    header("Location: principal.php");
?>
