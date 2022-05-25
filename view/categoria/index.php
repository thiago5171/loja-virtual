<html>
<?php
if ($_REQUEST)
    if ($_REQUEST['sucesso'] == true)
        echo "categoria " . $_REQUEST["categoriaNome"] . " inserida com sucesso";
?>
<h1>Cadastro de categoria</h1>
<form action="../../index.php?classe=Categoria&acao=create" method="post">

    Nome:<input name="nome"/>   </br>

    <input type="submit"/>
</form>
<p><h4>Outras funcionalidades:</h4></p>
<a href="../../index.php?classe=Categoria&acao=fetch" method="post">Listar </a> </br></br>
<a href="../categoria/editar.php" method="post"> editar </a>

</html>