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
        <h1>Cadastro de produto</h1>
    </header>
    <main>
        <h2>Insira os dados abaixo:</h2>
        <form action="cadastrosuccessfull.php" method="get">
            <label for="name"><b>Nome:</b></label>
            <input type="text" name="name" id="name">

            <label for="price"><b>Preço:</b></label>
            <input type="text" name="price" id="price"><br>

            <label for="desc"><b>Descrição:</b></label>
            <input type="text" name="desc" id="desc"><br>

            <label for="stck"><b>Em estoque? </b></label>
            <input type="checkbox" name="stck" value="1"><br>

            <label for="quant"><b>Quantidade: </b></label>
            <input type="number" name="quant" id="quant"><br>

            <label for="img"><b>Link da imagem: </b></label>
            <input type="text" name="img" id="img"><br>

            <button type="submit">Registrar</button>
        </form>
    </main>
    <footer>&copy-Torugo company campinas</footer>
</body>

</html>