<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\widgets\WLang;
use yii\helpers\Url;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE HTML>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
        });

    </script>

</head>
<body>
<?php $this->beginBody() ?>
<!-- header -->
<div class="container">
<div class="header">


        <?= WLang::widget()?>
        <div class="logo">
            <a href="index.html"><img src="/images/logo.png" class="img-responsive" alt=""></a>
        </div>
        <div class="head-nav">
            <span class="menu"> </span>
            <ul class="cl-effect-1">
                <li><a href="<?=Url::to(['site/index']);?>"><?=Yii::t('main', 'Home')?></a></li>
                <li class="active"><a href="<?=Url::to(['site/about']);?>"><?=Yii::t('main', 'About Us')?></a></li>
                <li><a href="<?=Url::to(['site/services']);?>"><?=Yii::t('main', 'Services')?></a></li>
                <li><a href="<?=Url::to(['blog/index']);?>"><?=Yii::t('main', 'Blog')?></a></li>
                <?if(Yii::$app->user->isGuest):?>
                    <li><a href="<?=Url::to(['site/signup']);?>"><?=Yii::t('main', 'Signup')?></a></li>
                    <li><a href="<?=Url::to(['site/login']);?>"><?=Yii::t('main', 'Login')?></a></li>
                <?else:?>
                    <li><a href="<?=Url::to(['site/logout']);?>"><?=Yii::t('main', 'Logout ({username})',['username' => Yii::$app->user->identity->username])?></a></li>
                <?endif;?>
                <li><a href="<?=Url::to(['site/contact']);?>"><?=Yii::t('main', 'Contact')?></a></li>
                <div class="clearfix"></div>
            </ul>
        </div>
        <!-- script-for-nav -->
        <script>
            $( "span.menu" ).click(function() {
                $( ".head-nav ul" ).slideToggle(300, function() {
                    // Animation complete.
                });
            });
        </script>
        <!-- script-for-nav -->



        <div class="clearfix"> </div>
    </div>
</div>
<!-- header -->
<div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>

<div class="footer">
    <div class="col-md-3 foot-1">
        <h4>Quick Links</h4>
        <ul>
            <li><a href="#">||   Lorem Ipsum passage</a></li>
            <li><a href="#">||   Finibus Bonorum et</a></li>
            <li><a href="#">||   Treatise on the theory</a></li>
        </ul>
    </div>
    <div class="col-md-3 foot-1">
        <h4>Favorite Resources</h4>
        <ul>
            <li><a href="#">||   Characteristic words</a></li>
            <li><a href="#">||   combined with a handful</a></li>
            <li><a href="#">||   which looks reasonable</a></li>
        </ul>
    </div>
    <div class="col-md-3 foot-1">
        <h4>About Us</h4>
        <ul>
            <li><a href="#">||  Even slightly believable</a></li>
            <li><a href="#">||  Hidden in the middle</a></li>
            <li><a href="#">||  Ipsum therefore always</a></li>
        </ul>
    </div>
    <div class="col-md-3 foot-1">
        <h4>Custom Menu</h4>
        <ul>
            <li><a href="#">||  Internet tend to repeat</a></li>
            <li><a href="#">||  Alteration in some form</a></li>
            <li><a href="#">||  This book is a treatise</a></li>
        </ul>
    </div>

    <div class="clearfix"> </div>
    <div class="copyright">
        <p>Copyrights <a href="https://www.facebook.com/profile.php?id=100008474378849">eIIIkuHKoT</a> & maybe <a href="https://www.facebook.com/profile.php?id=100011345055158&fref=ts">Sokar</a> &copy; <?= date('Y') ?> All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
    </div>
</div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
