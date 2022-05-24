<html>
<?php
if($_REQUEST)
    if($_REQUEST['sucesso'] == true)
        echo "categoria ".$_REQUEST["categoriaNome"]." inserida com sucesso";
?>
<h1>Cadastro de categoria</h1>
<form action="../../index.php?classe=Categoria&acao=getByid" method="post">

    Nome:<input name="id"/>  <br/>

    <input type="submit"/>
</form>

</html>