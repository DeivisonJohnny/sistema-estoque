<?php
include_once('../connection/estoque.php');



    if (!empty($_GET['search'])) {
        $dataSearch = $_GET['search'];
        $sql = "SELECT * FROM estoque WHERE id LIKE '%$dataSearch%' OR Marca LIKE '%$dataSearch%' OR Categoria LIKE '%$dataSearch%' ORDER BY id DESC";

        # code...
    } else {
        # code...
        $sql = "SELECT * FROM estoque ORDER BY id DESC";
    }

    $result = $connetion_stock->query($sql);
    
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
                <button id="iBtnSearch">
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
                <?php
                $line = mysqli_query($connetion_stock, $sql);
                if(mysqli_num_rows($line) > 0) {
                    while ($lineSql = mysqli_fetch_assoc($line)) {
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
                }

                ?>

            </tbody>
        </table>
    </main>
</body>

<script>
    const iBtnSearch = document.querySelector('#iBtnSearch')
    const search = document.querySelector('#isearch')

    search.addEventListener('keydown', function(event) {
        if(event.key === 'Enter') {
            searchClick()
        }
    })

    function searchClick() {
        window.location = 'index.php?page=lista&search='+search.value
    }

    iBtnSearch.addEventListener('click', searchClick)
</script>

</html>