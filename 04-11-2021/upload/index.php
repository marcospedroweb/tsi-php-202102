<?php
if($_FILES){
  //Se algo for enviado é tratado
  // echo "<pre>";
  // echo var_dump($_FILES);
  // echo "\n\n\n";
  var_dump($_FILES['arquivoDoUsuario']['type']);

  if( mime_content_type($_FILES['arquivoDoUsuario']['tmp_name']) == 'image/jpeg' ){
    move_uploaded_file($_FILES['arquivoDoUsuario']['tmp_name'], 
                      __DIR__ . '/arquivosRecebidos/' . rand(1,99999999) . 'user.file');
    //Randomizar o nome do arquivo para ser guardado, é uma boa pratica de segurança
    echo "Arquivo: {$_FILES['arquivoDoUsuario']['tmp_name']} recebido com sucesso";
  }else{
    echo "Tipo de arquivo não aceito";
  }
  
}


include 'formUpload.php';