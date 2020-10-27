<?php

use yii\helpers\Html;

$this->title = 'Produk';

?>
<style>
    .img-hover-zoom {
    height: 250px;
    /* [1.1] Set it as per your need */
    overflow: hidden;
    /* [1.2] Hide the overflowing of child elements */
    }

    /* [2] Transition property for smooth transformation of images */
    .img-hover-zoom img {
    -webkit-transition: -webkit-transform .5s ease;
    transition: -webkit-transform .5s ease;
    transition: transform .5s ease;
    transition: transform .5s ease, -webkit-transform .5s ease;
    }

    /* [3] Finally, transforming the image when container gets hovered */
    .img-hover-zoom:hover img {
    -webkit-transform: scale(1.1);
            transform: scale(1.1);
    cursor: pointer;
    }

    .img-hover {
    height: 250px;
    width: 100%;
    }
</style>
<div class="container">
    <section class="title">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 style="text-align: center; font-weight: bold; font-size:30px;"><?= Html::encode($this->title) ?> Kami</h4>
                    <hr style="border-top: 4px solid #c60f13; width: 80px;">
                </div>
            </div>
        </div>
    </section>
</div>