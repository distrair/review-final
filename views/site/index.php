<?php

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <?php echo \yii\widgets\ListView::widget([
        'dataProvider' => $dataProvider,
        'layout' => '<div class="row">{items}</div>{pager}',
        'itemView' => '_product_item',
        'itemOptions' => [
            'class' => 'col mb-5 w-50 h-50 product-item'
        ],
        'pager' => [
            'class' => \yii\bootstrap5\LinkPager::class,
        ]
    ]) ?>
</div>
