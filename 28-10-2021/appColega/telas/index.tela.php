<?php 
    include( __DIR__ . '/header.tela.php');//Mostra aquele arquivo, se não achar, segue o programa
    include( __DIR__ . '/menu.tela.php');//Mostra aquele arquivo, se não achar, segue o programa
?>

<div class="container-xl">
    <form action="./apagarColega.php" method="post">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th><th>Imagem</th><th>Nome</th><th>Ações</th>
                </tr>
            </thead>
            <?php
                foreach($registros as $registro){ 
                echo "<tbody>
                        <tr>
                            <td>{$registro['id']}</td>
                            <td><img src='./imagens/{$registro['imageUsuario']}' style='max-width: 200px'></td> 
                            <td>{$registro['nome']}</td>
                            <td>
                                <button name='id_editar' class='btn btn-warning btn-sm' value='{$registro['id']}'>Editar</button>
                                <button name='id_apagar' class='btn btn-danger btn-sm' value='{$registro['id']}'>Apagar</button>
                            </td>
                        </tr>
                    </tbody>";
                }
            ?>
        </table>
    </form>
    <div class="mt-5">
        <a class="btn btn-primary" href="./adicionarColega.php">Adicionar colega</a>
    </div>
</div>

<?php 
    include( __DIR__ . '/footer.tela.php');//Mostra aquele arquivo, se não achar, segue o programa
