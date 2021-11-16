<div class="container-xl">
    <form action="./registrarColega.php" method="POST" enctype="multipart/form-data" class="text-center">
        <div class="row justify-content-center align-items-center">
            <div class="col-5 my-3">
                <label for="nome" class="form-label mb-3 text-center">Digite o nome do colega</label>
                <input type="text" class="form-control mb-3" name="nome" id="nome" aria-describedby="emailHelp" placeholder="Digite o nome do colega" required>
                    <input type="file" class="form-control" id="arquivoDoUsuario" name="arquivoDoUsuario" 
                        aria-describedby="arquivoDoUsuario" aria-label="Upload">
            </div>
        </div>
        <button type="submit" class="btn btn-primary text-center">Adicionar colega</button>
    </form>
</div>