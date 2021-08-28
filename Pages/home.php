<?php
require_once('dados/dados.php')
?>

<?php
    foreach($produtos as $produto):
?>
<div class="homeproduto1">
    <img src="images/<?php echo $produto['imagem']?>" alt="<?php echo $produto['nome']?>">
    <h3><?php echo $produto['nome']?></h3>
</div>

<?php
    endforeach
?>