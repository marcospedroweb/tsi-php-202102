<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
//usado para depurar codigo

$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

$bd = new PDO($bd_dsn, $bd_user, $bd_pass);//Conecta ao banco SQL

$sql = 'SELECT 
            id, nome, professor, dia, descricao
        FROM 
            disciplinas'; //Usado para pegar dados das colunas da tabela no banco de dados
            //SELECT colunasDaTabela FROM nomeDaTabela

 $_GET['success'] = $_GET['success'] ?? false;// se não existir isso, substitua por isso
 $_GET['gravado'] = $_GET['gravado'] ?? false;// se não existir isso, substitua por isso

if($_GET['success']){
    echo '<span style="color: green;text-align: center;">Apagado com sucesso</span><br>';
}

if($_GET['gravado']){
    echo '<span style="color: green;text-align: center;">Gravado com sucesso</span><br>';
}
    

echo '<a href="./disciplina.html">Voltar</a>
    <form action="apagarDisciplina.php" method="post">
        <table border="1">
            <thead>
                <tr>
                    <th>Nome</th><th>Professor</th><th>Dia</th><th>Descrição</th><th>Ações</th>
                <tr>
            </thead>';

foreach ($bd->query($sql) as $registro){
    echo "<tbody>
            <tr>
                <td>{$registro['nome']}</td><td>{$registro['professor']}</td><td>{$registro['dia']}</td><td>{$registro['descricao']}</td><td><button name='apagar' value='{$registro['id']}'>Apagar</button></td>
            </tr>
        </tbody>";
}//value='{$registro['id']}', passa o valor da coluna 'id' da tabela 'Disciplinas'

echo '</table>
</form>';

// Armazenando a tabela inteira em um array
// $teste1 = $bd->query($sql);
// $teste2 = $teste1->fetchAll();
// $result = $teste2['nome'];
// echo $teste2[0]['nome'];