<?php 
    include( __DIR__ . '/header.tela.php');//Mostra aquele arquivo, se não achar, segue o programa
    include( __DIR__ . '/menu.tela.php');//Mostra aquele arquivo, se não achar, segue o programa
?>

<div class="container-xl">
    <form action="../editarColega.php" method="POST">
        <div class="my-3">
            <label for="novoNome" class="form-label">Edite o colega</label>
            <input type="text" class="form-control" name="novoNome" id="novoNome" aria-describedby="emailHelp" placeholder="Digite o novo nome" required>
        </div>
        <?php 
            echo "<button name='id_editar' value='{$_GET['id_editar']}' type='submit' class='btn btn-primary'>Editar nome</button>";
        ?>
    </form>
</div>

<?php 
    include( __DIR__ . '/footer.tela.php');//Mostra aquele arquivo, se não achar, segue o programa