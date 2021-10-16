<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
//usado para depurar codigo

session_start();//Usado para iniciar uma sessão com o usuario, fazendo existir a varivael $_SESSION
if(!isset($_SESSION['id'])){
    //Se não houver id armazenado em session, o usuario não está logado e pede para se logar
    echo "É necessario se logar para continuar!";
    echo "<br><br><a href='./login.html'>Se logar</a>";
    exit();//Finaliza a execução do programa
}

if($_GET['success'] !== false){
    $_GET['success'] = $_GET['success'] ?? null;
}


if($_GET['success']){
    echo "<span style='color:green;'>Tabela atualizada com sucesso</span><br><br>";
}else if($_GET['success'] === false){
    echo "Teste: {$_GET['success']}<br>";
    echo "<span style='color:red;'>Houve um erro, tente novamente</span><br><br>";
}


$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

$bd = new PDO($bd_dsn, $bd_user, $bd_pass);//Conecta ao banco SQL

$stmt = $bd->query('SELECT id,nome FROM colegas'); // ('SELECT nomeColuna,nomeColuna FROM nomeTabela')
echo '<form action="./apagarColega.php" method="post">';
echo '<table border="1">
        <thead>
            <tr>
                <th>Id</th><th>Nome</th><th>Ações</th>
            </tr>
        </thead>';

while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo "<tbody>
            <tr>
                <td>{$registro['id']}</td>
                <td>{$registro['nome']}</td>
                <td>
                    <button name='id_editar' value='{$registro['id']}'>Editar</button>
                    <button name='id_apagar' value='{$registro['id']}'>Apagar</button>
                </td>
            </tr>
    </tbody>";
}//Faz um loop para retornar dos dados do banco
//fetch(PDO::FETCH_ASSOC), retorna os dados em um array

echo "</table>";
echo "</form>";
echo "<br><a href='./colega.html'>Voltar</a>";
    


        

