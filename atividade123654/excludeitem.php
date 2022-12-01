<?php
require_once'../classes/rb-mysql.php';
$conn = R::setup('mysql:host=127.0.0.1;dbname=sistemac','root','aluno');
$id=$_GET['id'];
$aux = R::load('item', $id);
R::trash($aux);
echo"<h2>Item deleteado com sucesso!</h2>";
echo"<a href=\"cadastroentrada.php\">Cadastrar novo produto</a> <a href=\"listagemproduto.php\">lista de produtos</a>";

?>
