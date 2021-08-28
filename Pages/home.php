<?php
require_once('dados/dados.php')
?>

<?php
foreach ($produtos as $produto) :
?>
    <a href="index.php?page=produto&id=<?php echo $produto['id']?>">
        <div class="homeproduto1">
            <img src="images/<?php echo $produto['imagem'] ?>" alt="<?php echo $produto['nome'] ?>">
            <h3><?php echo $produto['nome'] ?></h3>
        </div>
    </a>
<?php
endforeach
?>