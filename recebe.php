<?php
echo "seu email é: " . $_POST["email"];// ( $_POST )Vetor super global, que recebe tudo enviado pelo metodo
// Recebe apenas dos inputs com "name"
echo "<br>";
echo "sua senha é: " . $_POST["password"];// ( $_POST )Vetor super global, que recebe tudo enviado pelo metodo

echo "<br><br>";
echo "Outra forma de fazer";
echo "<br><br>";

echo "Seu e-mail é {$_POST['email']} e sua senha é {$_POST['password']}";

phpinfo();//mostra mais dados possiveis