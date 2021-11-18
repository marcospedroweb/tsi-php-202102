<form action="index.php" method="post">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome">
    </div>
    <div class="form-group">
        <label for="prof">Professor</label>
        <input type="text" class="form-control" id="prof" name="prof">
    </div>
    <div class="form-group">
        <label for="dia">Dia</label>
        <input type="date" class="form-control" id="dia" name="dia">
    </div>
    <div class="form-group">
        <label for="desc">Descrição</label>
        <textarea name="desc" id="desc" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" name="criar">Criar</button>
</form>