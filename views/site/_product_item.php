<?php
/** @var app\models\Review $model*/
?>

<div class="card h-100">
    <div class="card-body p-4">
        <div class="text-center">
            <!-- Product name-->
            <h5 class="fw-bolder"><?php echo $model->head ?></h5>
            <div class="card-text">
                <?php echo $model -> description ?>
            </div>
            <!-- Product price-->
        </div>
    </div>
    <!-- Product actions-->
    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
    </div>
</div>