<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <script src="../js/manager.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/manager.css">
</head>

<body>
<?php 
    if(!empty($_GET['id'])){
        require_once('../connection/estoque.php');
        $idCollect = $_GET['id'];
        $sqlCollect = mysqli_query($connetion_stock, "SELECT* FROM estoque WHERE id = $idCollect");

        if($lineCollect = mysqli_fetch_assoc($sqlCollect)){
            
            $marca = $lineCollect['Marca'];
            $categoria = $lineCollect['Categoria'];
            $descricao = $lineCollect['Descricao'];
            $QTD_unidades = $lineCollect['QTD_unidades'];
            $Valor_BT_UN = $lineCollect['Valor_BT_UN'];
            $Valor_FN_UN = $lineCollect['Valor_FN_UN'];
        }
    } else {

    }
?>
    <main>
        <div id="box-radius">
            <ul>
                <li id="red"></li>
                <li id="yellow"></li>
                <li id="green"></li>
            </ul>
        </div>
        <form action="../auth/auth-estoque.php?id=<?php echo$idCollect;?>" method="post" id="formMain">
            <h1>Adicionar produto ao estoque</h1>
            <input type="hidden" name="acao" value="update">
            <section>
                <div>
                    <label class="label-required" for="marca">Marca</label>
                    <input class="inputs" type="text" name="marca" value="<?php echo$marca;?>" id="marca" placeholder="Exemple: Old Parr">
                    <span>* Esse campo é obrigatório</span>
                </div>
                <div id="box-select">
                    <label class="label-required" for="categoria">Categoria</label>
                    <div>
                        <select name="categoria" id="categoria" >
                            <option value="">Selecione uma categoria</option>
                            <option value="Whiskey">Whiskey</option>
                            <?php 
                                include_once("../connection/estoque.php");

                                $sqlListCate = mysqli_query($connetion_stock, "SELECT * FROM categorias");

                                if (mysqli_num_rows($sqlListCate) > 0) {
                                    while($listCate = mysqli_fetch_assoc($sqlListCate)){
                                        echo "<option value=".$listCate['Categoria'].">".$listCate['Categoria']."</option>";
                                    }
                                } else {
                                    # code...
                                }
                                

                            ?>
                        </select>
                        <p id="addCategoria" onclick="newCategoria()">
                            <i class="bi bi-plus"></i>
                            </p>
                    </div>

                </div>
            </section>
            <section>
                <div>
                    <label class="label-required" for="desc">Descrição do produto</label>
                    <textarea name="desc" value="<?php echo $descricao;?>" id="desc" cols="10" rows="1" placeholder="Descrição"></textarea>
                </div>
                <div>
                    <label class="label-required" for="unidades">Quantas unidades</label>
                    <input class="inputs" type="number" name="unidades" value="<?php echo$QTD_unidades;?>" id="unidades">
                    <span>* Esse campo é obrigatório</span>
                </div>
            </section>
            <section>
                <div>
                    <label class="label-required" for="brutoVL">Valor bruto da unidade</label>
                    <input class="inputs" type="number" step="0.01" name="brutoVL" value="<?php echo$Valor_BT_UN;?>" id="brutoVL">
                    <span>* Esse campo é obrigatório</span>
                </div>
                <div>
                    <label class="label-required" for="valorUN">Valor final da unidade:</label>
                    <input class="inputs" type="number" step="0.01" name="valorUN" value="<?php echo$Valor_BT_UN;?>" id="valorUN">
                    <span>* Esse campo é obrigatório</span>

                </div>
            </section>
            <div id="box-submit">
                <input  type="submit" value="Adicionar">
            </div>
        </form>

        <div id="bottom-band">

        </div>
        <div class="cate" >
            <form id="form-cate" action="../auth/auth-estoque.php" method="post">
                <i class="bi bi-x" onclick="exitMenu()"></i>
                <input type="hidden" name="acao" value="new-category">
                <h2>Nova categoria</h2>
                <div>
                    <label for="nvcate">Nome da categoria</label>
                    <div>

                        <input type="text" name="new-cate" id="nvcate">
                        <button type="submit" title="Adicionar categoria"><i class="bi bi-plus"></i></button>
                    </div>
                </div>
            </form>

        </div>
    </main>


</body>

</html>