<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de entrada de produtos</title>
    <link rel="stylesheet" href="xxxx.css">
</head>

<body>
    <header>
        <h1>Edição de produto</h1>
    </header>
    <main>
        <?php
        require_once'../classes/rb-mysql.php';
        $conn = R::setup('mysql:host=127.0.0.1;dbname=sistemac', 'root', 'aluno');

        $id = $_GET['id'];
        $aux = R::load('item', $id);
        $form = <<<FORM
<h2>Insira os dados abaixo:</h2>
<form action="cadastroeditor.php?id=$aux->id" method="post">
    <label for="name"><b>Nome:</b></label>
    <input type="text" name="name" id="name" value="$aux->nome">
    <label for="price"><b>Preço:</b></label>
    <input type="text" name="price" id="price" value="$aux->preco"><br>
    <label for="desc"><b>Descrição:</b></label>
    <input type="text" name="desc" id="desc" value="$aux->desc"><br>
    <label for="stck"><b>Em estoque? </b></label>
    <input type="checkbox" name="stck" value="1" value="$aux->stck"><br>
    <label for="adm"><b>Quantidade:</b></label>
    <input type="number" name="quant" id="quant" value="$aux->qnt"><br>
    <label for="img"><b>Link da Imagem:</b></label>
    <input type="text" name="img" id="img" value="$aux->img"><br>
    <div>Id: $aux->id </div>
    <button type="submit">Salvar mudanças</button>
</form>
FORM;
echo $form;
        ?>
    </main>
    <footer>&copy-Torugo company campinas</footer>
</body>

</html>