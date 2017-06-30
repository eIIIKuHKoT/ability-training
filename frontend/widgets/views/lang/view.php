<?php

use yii\helpers\Html;
?>
<div id="lang">
    <ul id="langs" class="list-inline">
        <li class="item-lang active"><img src="/images/<?= $current->url;?>.png">
        </li>
        <?php foreach ($langs as $lang):?>
            <li class="item-lang">
                <a href="<?='/'.$lang->url.Yii::$app->getRequest()->getLangUrl()?>"><img src="/images/<?=$lang->url?>.png"></a>
            </li>
        <?php endforeach;?>
    </ul>
</div>