<?php
require_once('dados/dados.php');
$id = null;

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (!isset($produtos[$id])) {
        $id = null;
    }
}

if (is_null($id)) {
?>
    <div>
        Produto inexistente!
    </div>
<?php
} else {
?>
    <div class ="prod-cl">
        <img src="images/<?php echo $produtos[$id]['imagem'] ?>" alt="<?php echo $produtos[$id]['nome'] ?>">
    </div>

    <div class="prod-cr">
        <h1><?php echo $produtos[$id]['nome'] ?></h1>
        <h2><?php echo "R$ ".number_format($produtos[$id]['preco'],2,",",".") ?><spam> / Unidade</spam></h2>        
        <p>
            <?php echo $produtos[$id]['descricao'] ?>
        </p>
    </div>
<?php


}

?>