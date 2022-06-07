<html>

<?php


if (isset($_REQUEST['clienteExibir'])) {
    foreach ($_REQUEST['clienteExibir'] as $client) {
        ?>
        <h2>Editar cliente</h2>
        <p> Caso queira modificar envie o formulário após as alterações</p>
        <form action="index.php?classe=Client&acao=edit" method="post">
            Id: <input readonly name="id" value="<?= $client['id'] ?>"/> <br/>

            Nome: <input name="nome" value="<?= $client['nome'] ?>" type="text"/> <br/>
            CPF: <input name="cpf" value="<?= $client['cpf'] ?>" type="text"/> <br/>
            senha: <input name="password" value="<?= $client['senha'] ?>" type="text"/> <br/>

            <input type="submit" title="Editar"/>
        </form>

        <?php
    }
} else {
    ?>
    <h2>Buscar cliente </h2>
    <p>Digite o 'Id' da cliente</p>
    <form action="../../index.php?classe=Client&acao=getByid" method="post">

       <input name="id"/> <br/>

        <input type="submit"/>
    </form>
    <?php
}
?>
</html>
