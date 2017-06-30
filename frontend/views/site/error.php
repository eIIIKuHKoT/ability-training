<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<!-- 404 -->
<div class="container">
    <div class="main">
        <div class="error-404 text-center">
            <h1><?= Html::encode($this->title) ?></h1>
            <p>
                <?= nl2br(Html::encode($message)) ?>
            </p>
            <a class="b-home" href="/"><?=Yii::t('main', 'Back to Home')?></a>
        </div>
    </div>
    <!-- 404 -->
</div>

