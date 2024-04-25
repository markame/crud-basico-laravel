<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Produtos</title>
</head>
<body>
<form action="{{route('produto_store')}}" method="POST">
    @csrf
    <label for="nome">Nome </label> <br/>
    <input type="text" id="nome" name="nome"/> <br/>
    <label for="desc">Descrição </label> <br/>
    <input type="text" id="desc" name="descricao"/> <br/>
    <label for="preco">Preço </label> <br/>
    <input type="text" id="preco" name="preco"/> <br/>
    <label for="quant">Nome </label> <br/>
    <input type="text" id="quant" name="quantidade"/> <br/>
    <button type="submit"> Gravar</button>
</form>
</body>
</html>
