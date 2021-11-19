<div class="container-xl">
    <h1 class="text-center mt-5 mb-3">Nova disciplina</h1>
    <form action="index.php" class="row justify-content-center align-items-start" method="post">
        <div class="col-4">
            <div class="form-group mb-3">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" 
                    value="<?php echo $disciplina['nome'] ?? ''; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="prof">Professor</label>
                <input type="text" class="form-control" id="prof" name="prof" 
                    value="<?php echo $disciplina['professor'] ?? ''; ?>">
            </div>
        </div>
        <div class="col-4">
            <div class="form-group mb-3">
                <label for="dia">Dia</label>
                <input type="date" class="form-control" id="dia" name="dia" 
                    value="<?php echo $disciplina['dia'] ?? ''; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="desc">Descrição</label>
                <textarea name="desc" id="desc" class="form-control"><?php echo $disciplina['descricao'] ?? ''; ?>
                </textarea>
            </div>
        </div>
        <div class="col-12 text-center my-3">
            <input type="hidden" name="id" value="<?php echo $disciplina['id'] ?? ''; ?>">
            <button type="submit" class="btn btn-primary" name="criar">
            <?php if ( isset($disciplina) ) echo 'Salvar'; else echo 'Criar'; ?>
            </button>
        </div>
    </form>
</div>
