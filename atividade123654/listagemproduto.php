<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos</title>
    <link rel="stylesheet" href="xxxx.css">
</head>
<body>
<header><h1>Produtos:</h1></header>
<main>
   <div class="textcontent"> 
<?php 
require_once'../classes/rb-mysql.php';

$conn = R::setup('mysql:host=127.0.0.1;dbname=sistemac','root','aluno');
$stoc;
$itens = R::findAll('item');
echo"<table><tr><th>ID</th><th>Nome</th><th>Preço</th></tr>";
foreach ($itens as $i) {

echo'<tr '.($i->stock ? 'style="color:#4ae3e3" ' : 'style="color:gray" ')."><td>$i->id</td><td>$i->nome</td><td>$i->preco</td><td><a href=\"dadosproduto.php?id=$i->id\"><img class=\"icon\" src=\"images/1f50d.png\" alt=\"Detalhes\"></a></td><td><a href=\"edicaoentrada.php?id=$i->id\"><img class=\"icon\" src=\"images/270f.png\" alt=\"Edição\"></a></td><td><a href=\"excludeitem.php?id=$i->id\"><img class=\"icon\" src=\"images/1f5d1.png\" alt=\"Excluir\"></a></td></tr>";
}
echo"</table>"; 

?>
</div>

</main>
<footer>&copy-Torugo Company Campinas</footer>
</body>
</html>