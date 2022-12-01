<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes</title>
    <link rel="stylesheet" href="xxxx.css">
</head>
<body>
<header><h1>Testes</h1></header>
<main>
<div class="textcontent">
<?php 
require_once'../classes/rb-mysql.php';

$conn = R::setup('mysql:host=127.0.0.1;dbname=sistemac','root','aluno');

$id=$_GET['id'];
$aux = R::load('item', $id);
$detail=<<<D
<div class="kl">
<h4>$aux->nome</h4>
<div class="image"><img src="$aux->img"></div>
<table>
<tr><td><b>Preço:</b> $aux->preco</td>
<td><b>Quantidade: </b> $aux->qnt</td></tr><br>
</table>
<div class="border"> $aux->desc </div>
</div>
D;
echo $detail;
?>
</div>
</main>
<footer>&copy-Torugo Company CAmpinas</footer>
</body>
</html>