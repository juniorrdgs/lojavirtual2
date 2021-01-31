<div class="row">
<?php 
$a = 0;
?>
<?php foreach($list as $product_item): ?>
    <div class="col-sm-4">
        <?php $this->loadView('product_item', array()); ?>
    </div>
    <?php
    if($a >= 2) {
        $a = 0;
        echo '</div><div class="row">';
    } else {
    $a++; 
    }
    ?>
<?php endforeach; ?>
</div>