<?php

/* @var $this yii\web\View */
/* @var $good \app\models\Goods */

$this->title = 'View';


\app\assets\CompAsset::register($this);
?>
<?= \app\components\HelloWidget::widget([
    'message' => 'adssdas',
    'a' => 'cc'
])?>

