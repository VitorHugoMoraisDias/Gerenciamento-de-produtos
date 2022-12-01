<?php
require_once'../classes/rb-mysql.php';
$conn = R::setup('mysql:host=127.0.0.1;dbname=sistemac','root','aluno');
$id= $_GET['id'];

$aux = R::load('item', $id);
echo $id;
if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['quant']) && isset($_POST['desc'])){    
$aux->nome = $_POST['name'];
$aux->preco = $_POST['price'];
$aux->stock = isset($_POST['stck']) ? 1 :0;
$aux->qnt = $_POST['quant'];
$aux->desc = $_POST['desc'];
$aux->img = $_POST['img'];
R::store($aux);
echo"<h2>Edição efetuada com sucesso!</h2>";
echo"<a href=\"cadastroentrada.php\">Cadastrar novo produto</a> <a href=\"listagemproduto.php\">lista de produtos</a>  ";
}
else{
    echo"<h1>Error 567</h1><i>Nem todos os dados foram inseridos corretamente, <a href=\"cadastroentrada.php\">Clique aqui e tente novamente</a></i>";
}
