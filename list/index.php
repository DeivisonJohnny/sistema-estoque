<?php
include_once('../connection/estoque.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/list.css">
    <title>Document</title>
</head>

<body>
    <main>
        <section id="box-search">
            <div>

                <input type="search" name="" id="isearch" placeholder="Pesquisar">
                <button>
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </section>
        <table>
            <thead>
                <tr>
                    <th style="border-radius: 5px 0px 0px 0px;">ID</th>
                    <th>Marca</th>
                    <th>Categória</th>
                    <th>Descrição</th>
                    <th>Unidades dispónivel</th>
                    <th>Valor valor de estoque</th>
                    <th>Valor de venda</th>
                    <th>Editar</th>
                    <th style="border-radius: 0px 5px 0px 0px;">Valor de venda</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr>
                    <td>23</td>
                    <td>Skol</td>
                    <td>Cerveja</td>
                    <td>1 L</td>
                    <td>200</td>
                    <td>R$ 4.5</td>
                    <td>R$ 7.00</td>
                    <td class="pincel"><i class="bi bi-pencil-square"></i></td>
                    <td class="trash"><i class="bi bi-trash3"></i></td>
                </tr> -->
                <?php

                $sql = mysqli_query($connetion_stock, "SELECT * FROM estoque");

                while ($lineSql = mysqli_fetch_assoc($sql)) {
                    echo "<tr>";
                    echo "<td>";
                    echo $lineSql['id'];
                    echo "</td>";
                    echo "<td>";
                    echo $lineSql['Marca'];
                    echo "</td>";
                    echo "<td>";
                    echo $lineSql['Categoria'];
                    echo "</td>";
                    echo "<td>";
                    echo $lineSql['Descricao'];
                    echo "</td>";
                    echo "<td>";
                    echo $lineSql['QTD_unidades'];
                    echo "</td>";
                    echo "<td> R$ ";
                    echo $lineSql['Valor_BT_UN'];
                    echo "</td>";
                    echo "<td> R$ ";
                    echo $lineSql['Valor_FN_UN'];
                    echo "</td>";

                    echo "<td class='pincel' name='editeId' value='" . $lineSql['id'] . "'>
                        <button onclick=\"window.location.href='../home/index.php?page=editar&id=".$lineSql['id']."'\">
                        
                        <i  class='bi bi-pencil-square'></i>
                        
                        </button>";
                    echo "</td>";

                    echo "<td class='trash'>
    <button onclick=\"if(confirm('Realmente deseja deletar o cadastro de " . $lineSql['Marca'] . " ')){window.location.href='../home/index.php?page=deletar&id=" . $lineSql['id'] . "';}\"><i class='bi bi-trash3'></i></button>";
                    echo "</td>";



                    echo "</tr>";
                }

                ?>

            </tbody>
        </table>
    </main>
</body>

</html>