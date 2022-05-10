<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biblioteca</title>
</head>

<body>
    <h1>Biblioteca</h1>

    <form action="/cadastrar-produto" method="POST">
        @csrf
        <label for="lblNome">Nome:</label>
        <input tyfe="text" name="nome">
        <br><br>
        <label for="lblValor">Valor:</label>
        <input type="text" name="valor">
        <br><br>
        <label for="lblAutor">Autor:</label>
        <input type="text" name="autor">
        <br><br>
        <button>Cadastrar</button>
    </form>
</body>

</html>
