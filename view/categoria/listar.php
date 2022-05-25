<html>
<h1> Listagem</h1>

<thead>
<tr>

    <th scope="col">Nome</th> |
    <th scope="col">Id</th>
    </br>

</tr>
</thead>
<tbody>
<?php
if (isset($_REQUEST['categorialista'])) {

    foreach ($_REQUEST['categorialista'] as $categoria) {


        ?>
        <style type="text/css">
            #lista {
                display: flex;

            }
            #form {
                width: 1.5rem;
                align-items: center;
            }
        </style>
        <div id="lista">
            <div>
                <td><?= $categoria['nome'] ?> |</td>
                <td>  <?=$categoria['id'] ?></td>
               </div>
            </div>
<!--            <div  >-->
<!---->
<!--                <form action="index.php?classe=Categoria&acao=delete" method="post">-->
<!--                    <input id="form"  disabled name="id" value="--><?//= $categoria['id'] ?><!--"/>-->
<!--                    <input type="submit"  />-->
<!---->
<!--                </form>-->
<!--            </div>-->
        </div>

        </th>
        </tr>
        <?php
    }
}
?>


</tbody>
</table>
</html>
