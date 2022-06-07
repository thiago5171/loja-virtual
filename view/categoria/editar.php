<html>


<?php


if (isset($_REQUEST['categoriaExibir'])) {
    foreach ($_REQUEST['categoriaExibir'] as $categoria) {
        ?>
        <h2>Editar categoria</h2>
        <p> Caso queira modificar envie o formulário após as alterações</p>
        <form action="create.php?classe=Categoria&acao=edit" method="post">
            Id: <input name="id" value="<?= $categoria['id'] ?>"/> <br/>

            Nome: <input name="nome" value="<?= $categoria['nome'] ?>" type="text"/> <br/>

            <input type="submit" title="Editar"/>
        </form>

        <?php
    }
} else {
    ?>
    <h2>Buscar categoria </h2>
    <p>Digite o id da categoria</p>
    <form action="../../index.php?classe=Categoria&acao=getByid" method="post">

        Nome:<input name="id"/> <br/>

        <input type="submit"/>
    </form>
    <?php
}
?>

</html>