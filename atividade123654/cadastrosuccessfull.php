<?php
require_once'../classes/rb-mysql.php';
$conn = R::setup('mysql:host=127.0.0.1;dbname=sistemac','root','aluno');

$item = R::dispense('item');
if(isset($_GET['name']) && isset($_GET['price']) && isset($_GET['quant']) && isset($_GET['desc'])){    
$item->nome = $_GET['name'];
$item->preco = $_GET['price'];
$item->stock = isset($_GET['stck']) ? 1 :0;
$item->qnt = $_GET['quant'];
$item->desc = $_GET['desc'];
$item->img = $_GET['img'];
R::store($item);
echo"<h2>Cadastro efetuado com sucesso!</h2>";
echo"<a href=\"cadastroentrada.php\">Cadastrar novo produto</a> <a href=\"listagemproduto.php\">lista de produtos</a>  ";
}
else{
    echo"<h1>Error 567</h1><i>Nem todos os dados foram inseridos corretamente, <a href=\"cadastroentrada.php\">Clique aqui e tente novamente</a></i>";
}
