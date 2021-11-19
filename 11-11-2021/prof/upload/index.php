<?php

if ( $_FILES ) {//Se algo for enviado para o servidor, tratamos

    //Verificamos se o tipo do arquivo, é um tipo que aceitamos.
    $tipo = mime_content_type($_FILES['arquivoDoUsuario']['tmp_name']);

    switch ( $tipo ) {

        case 'image/jpeg':

            $ext = '.jpg';
            break;
            
        case 'image/png':

            $ext = '.png';
            break;

        case 'image/gif':

            $ext = '.gif';
            break;

        case 'application/pdf':

            $ext = '.pdf';
            break;
        
        default:

            //Se o tipo não for aceito, avisamos o usuário 
            echo "Tipo de arquvio não aceito!";
            exit();
    }

    //Movemos aqui, o arquivo temporário recebido do lado do servidor
    //para um local definitivo. move_uploaded_file( lugar temporário, lugar definitivo)
    move_uploaded_file( $_FILES['arquivoDoUsuario']['tmp_name'], 
                        __DIR__ . '/arquivosRecebidos/' . rand(1,9999999999) . '_user' . $ext);

    //Mostramos uma mensagem de sucesso
    echo "Arquivo {$_FILES['arquivoDoUsuario']['name']} recebido com sucesso!<br><br>";
}


//Form para enviar arquivos para o lado do servidor
include 'formUpload.php';