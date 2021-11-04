<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aprendendo upload</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <div class="container-xxl">
    <h1 class="text-center my-5">Upload</h1>
    <!-- <div>
        <form method="POST" action="index.php" enctype="multipart/form-data">
            <label for="arquivo">Escolha seu arquivo</label>
            <br><br>
            <input type="file" id="arquivo" name="arquivoDoUsuario">
            <br><br>
            <input type="submit" value="Enviar Arquivo">
        </form>
    </div> -->
    <form method="POST" action="index.php" enctype="multipart/form-data" class="row justify-content-center align-items-center">
      <!-- É necessario ter o enctype="multipart/form-data", para o upload funcionar   -->
      <div class="col-5">
        <div class="input-group">
          <input type="file" class="form-control" id="arquivoDoUsuario" name="arquivoDoUsuario" 
            aria-describedby="arquivoDoUsuario" aria-label="Upload">
          <input type="submit" class="btn btn-outline-secondary"  id="button-file" value="Enviar">
        </div>
      </div>
    </form>
  </div>

</body>

</html>