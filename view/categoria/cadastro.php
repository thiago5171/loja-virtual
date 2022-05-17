<html>
<?php
if($_REQUEST)
    if($_REQUEST['sucesso'] == true)
        echo "categoria ".$_REQUEST["categoriaNome"]." inserida com sucesso";
?>
    <h1>Cadastro de categoria</h1>
    <form action="../../index.php?classe=Categoria&acao=create" method="post">

        Nome:<input name="nome"/>  <br/> <br/>

        <input type="submit"/>
    </form>

<a href="../../index.php?classe=Categoria&acao=fetch" method="post">Listar <a>

</html>