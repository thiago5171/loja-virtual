<html>
<h1> Listagem</h1>

    <thead>
    <tr>

        <th scope="col">Nome</th></br>

    </tr>
    </thead>
    <tbody>
    <?php
    if (isset($_REQUEST['categorialista'])) {

        foreach ($_REQUEST['categorialista'] as $categoria) {


            ?>
            <tr>
                <td><?= $categoria['nome'] ?></td> </br>

                </th>
            </tr>
            <?php
        }
    }
    ?>

    <tbody>
</table>
</html>
