<?php
foreach ($Album as $item) { ?>
<div class="card">
<div class="box_img">
    <img src="<?= $item['poster']?>" alt="#">
</div>
<div class="box_text">
    <h3><?= $item['title']?></h3>
    <span><?= $item['author']?></span><br>
    <span><?= $item['year']?></span>
</div>
</div>
<?php
    
}?>




