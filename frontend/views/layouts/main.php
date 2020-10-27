<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\bootstrap4\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Breadcrumbs;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>

        .pelanggan{
            position: relative; 
            top: 1px; 
            font-family:'helvetica',sans-serif; 
            font-size: 15.95px; 
            list-style: none;
            color: black;
        }

        a {
            color: black;
        }

    </style>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar sticky-top navbar-expand-lg navbar-light bg-light',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ml-auto'],
        'items' => [
            // ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Tentang Kami', 'url' => ['/site/about']],
            ['label' => 'Toko', 'url' => ['/site/toko']],
            // ['label' => 'Kontak', 'url' => ['/site/contact']],
            ['label' => 'Gudang Kami', 'url' => ['/site/gudang']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login / Daftar', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <!-- <div class="container"> -->
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    <!-- </div> -->
</div>
<hr width="82%">
<div class="container">
    <div style="margin-top:15px;" class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-hover-zoom img-hover-zoom--xyz">
                        <img class="img-hover" src="<?= Yii::getAlias('@web/img/banner1.png') ?>" alt="Another Image zoom-on-hover effect">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-hover-zoom img-hover-zoom--xyz">
                        <img class="img-hover" src="<?= Yii::getAlias('@web/img/banner2.png') ?>" alt="Another Image zoom-on-hover effect">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="footer" style="height:280px">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img src="<?= Yii::getAlias('@web/img/footer.png')?>" alt="">
            </div>
            <div class="row">
                <ul class="pelanggan">
                    <li>
                        <?= Html::a('Layanan Pelanggan',['index'])?>
                    </li>
                    <br>
                    <li>
                        <?= Html::a('Kebijakan Privasi',['kebijakan-privasi'])?>
                    </li>
                    <br>
                    <li>
                        <?= Html::a('FAQ',['faq'])?>
                    </li>
                </ul>                  
            </div>
            <div class="col-6">
                <ul class="pelanggan">
                    <li>
                        <?= Html::a('Lokasi Toko',['gudang'])?>
                    </li>
                    <br>
                    <li>
                        <?= Html::a('Jam Buka (09.00 - 17.00 / Senin - Sabtu)',['gudang'])?>
                    </li>
                </ul>
            </div>
          </div>
        </div>
    </div>
</div>
<br>
<footer class="footer" style="background-color: #D9D3D3;">
    <div class="container">
        <p class="pull-left">&copy; <?= date('Y') ?> KayuOnline v2.0 - All Right Reserved!</p>

        <!-- <p class="ml-auto"><?= Yii::powered() ?></p> -->
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
