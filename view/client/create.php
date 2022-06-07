<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <h1>Cadastro de cliente</h1>

</head>
<body>
<?php
if ($_REQUEST)
    if ($_REQUEST['sucesso'] == true)
        echo "cliente " . $_REQUEST["clientNome"] . " inserida com sucesso";
?>
<form action="../../index.php?classe=Client&acao=create" method="post">

    Nome:<input name="nome"/>   </br>
    Cpf:<input name="cpf"/>   </br>
    Password:<input name="password" type="password"/>   </br>

    <input type="submit"/>
</form>
</br></br></br>
<button>
    <a href="../client/editar.php" method="post"> editar </a>
</button></br></br>
<button>
    <a href="../../index.php?classe=Client&acao=fetch" method="post">Listar </a>
</button></br></br>


<button>
    <a href="../client/delete.php" method="post"> deletar </a>
</button></br></br>


</body>
</html>