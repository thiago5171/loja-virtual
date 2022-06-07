<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <link rel="stylesheet" href="style.css">
    <h2>Selecione o setor na qual deseja realizar as operações</h2>
</head>
<body>
<table>

<thead>
<tr>
    <th scope="col">Id</th>

    <th scope="col">Nome</th>
    <th scope="col">CPF</th>


    </br>

</tr>
</thead>

<tbody>
<?php
if (isset($_REQUEST['clientLista'])) {

    foreach ($_REQUEST['clientLista'] as $client) {


        ?>

                <tr>
                <td>  <?=$client['id'] ?></td>

                <td><?= $client['nome'] ?> </td>
                <td><?= $client['cpf'] ?> </td>
                </tr>

        <?php
    }
}
?>


</tbody>
</table>

</body>
</html>