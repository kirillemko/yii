<?php

/* @var $this yii\web\View */
/* @var $good \app\models\Goods */

$this->title = 'View';


\app\assets\CompAsset::register($this);
?>
<div class="foto1">
    <div class="picture">
        <a href="#"><img src="/<?=$good->url?>" alt="#"/></a>
    </div>
    <div class="business">
        <?=$good->title?>
    </div>
    <div class="businesstext">
        <?=$good->full_text?>
    </div>

</div>