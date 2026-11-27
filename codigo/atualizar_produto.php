
<?php
require_once "conexao.php";

$idproduto = $_POST['idproduto'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$estoque = $_POST['estoque'];
$foto = $_POST['foto'];
$destaque = $_POST['destaque'];
$idcategoria = $_POST['idcategoria'];
$idfornecedor = $_POST['idfornecedor'];
$idmarca = $_POST['idmarca'];

$sql = "UPDATE produtos SET nome = ?, descricao = ?, preco = ?, estoque = ?, foto = ?, destaque = ?, idcategoria = ?, idfornecedor = ?, idmarca = ? WHERE idproduto = ?";

$comando = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($comando, "ssdissiiii", $nome, $descricao, $preco, $estoque, $foto, $destaque, $idcategoria, $idfornecedor, $idmarca, $idproduto);

mysqli_stmt_execute($comando);

header("Location: listar_produtos.php");
?>
