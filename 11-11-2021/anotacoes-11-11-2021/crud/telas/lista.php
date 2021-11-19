<div>
<a href="novo.php"><button class="btn btn-primary">Nova Disciplina</button></a>
<!-- Leva para pagina com o form para adicionar uma nova Disciplina -->
</div>
<div>
<?php
if(isset($apagado)){
    // Se a variavel $apagado existir, mostra um aviso sobre a ação foi concluida ou não
    if($apagado){

        echo '  <div class="alert alert-success" role="alert">
                    Disciplina apagada com sucesso!
                </div>';
    }else{

        echo '  <div class="alert alert-danger" role="alert">
                    Erro ao tentar apagar a disciplina!
                </div>';
    }
}
if(isset($criado)){
    // Se a variavel $criado existir, mostra um aviso sobre a ação foi concluida ou não
    if($criado){

        echo '  <div class="alert alert-success" role="alert">
                    Disciplina criada com sucesso!
                </div>';
    }else{

        echo '  <div class="alert alert-danger" role="alert">
                    Erro ao tentar criar a disciplina!
                </div>';
    }
}
?>
</div>
<form method="post" action="">
    <!-- Action vazio, pois os dados são enviados para essa mesma pagina -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th><th>Nome</th><th>Professor</th><th>Dia</th><th>Descrição</th><th></th><th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($lista as $id => $disciplina){
                //$lista é um array, com os indices, contendo outra array com os registros daquele id
                //Dentro de $lista, acessa o indice $id e dentro desse indice acessa o valor $disciplina
                // No js seria tipo $lista[$id][$disciplina].nome
                // A logica comparando com js No array $lista, cada indice($id) de $lista, contem um objeto($disciplina.indice) com algum valor
            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $disciplina['nome']; ?></td>
                    <td><?php echo $disciplina['professor']; ?></td>
                    <td><?php echo $disciplina['dia']; ?></td>
                    <td><?php echo $disciplina['descricao']; ?></td>
                    <td><button name="editar" class="btn btn-secondary">Editar</button></td>
                    <td><button name="apagar" class="btn btn-danger" value="<?php echo $id; ?>">Apagar</button></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</form>