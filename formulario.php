<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form method="post" action="recebe.php">
        <!-- Post para dados sensiveis -->
        <label for="email">Email: </label>
        <input type="email" id="email" name="email" placeholder="seuemail@email.com" autocomplete="off">
        <br>
        <br>
        <label for="password">Senha: </label>
        <input type="password" id="password" name="password" placeholder="sua senha" autocomplete="off">
        <br>
        <br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>