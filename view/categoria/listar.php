<html>
<h1> Listagem</h1>

    <thead>
    <tr>

        <th scope="col">Nome</th>
        <th scope="col">Id</th></br>

    </tr>
    </thead>
    <tbody>
    <?php
    if (isset($_REQUEST['categorialista'])) {

        foreach ($_REQUEST['categorialista'] as $categoria) {


            ?>
            <tr>
                <td><?= $categoria['nome'] ?>  | </td>

                <a href="./index.php?classe=Categoria&acao=getById&param=<?$categoria['id']?>"> editar</a> </br>
                </th>
            </tr>
            <?php
        }
    }
    ?>


    </tbody>
</table>
</html>
