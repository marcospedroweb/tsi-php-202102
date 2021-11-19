<?php

$_POST['email'] = $_POST['email'] ?? 'Não informado';

$_POST['password'] = isset($_POST['password']) ? $_POST['password'] : 'Não informado';

echo "Seu e-mail é " . $_POST['email'] . " e sua senha é " . $_POST['password'];

echo "<br><br>";

echo "Seu e-mail é {$_POST['email']} e sua senha é {$_POST['password']}";

echo "<br><br>";

phpinfo();