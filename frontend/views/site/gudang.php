<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Gudang Kami';
// $this->params['breadcrumbs'][] = $this->title;
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

    .map-responsive{
    overflow:hidden;
    padding-bottom:56.25%;
    position:relative;
    height:0;
    }

    .map-responsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
    }
</style>
<!-- title -->
<div class="container">
    <div class="col-sm-12">
        <h4>Gudang Kami</h4>
    </div>
    <hr>
    <!-- maps -->
    <div class="row">
        <div class="col-md-6">
            <h4 style="text-align: center; font-weight: bold;">Jawa Tengah</h4>
            <hr style="border-top: 4px solid #c60f13; width: 80px;">
            <div class="map-responsive">
                <iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.9366921006817!2d110.71091561483588!3d-6.6547691951881225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70e128d20478b1%3A0x88a786e0c5efc982!2sCV%20INTEGRITAS%20MULIA%20BERSAMA!5e0!3m2!1sid!2sid!4v1600336845112!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-6">
            <h4 style="text-align: center; font-weight: bold;">Jawa Barat</h4>
            <hr style="border-top: 4px solid #c60f13; width: 80px;">
            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.4985827425496!2d107.57283607588391!3d-6.890941135913903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e5d57f63fb31%3A0xa038660a78fc68d4!2sDapoerea!5e0!3m2!1sid!2sid!4v1598502419771!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

    <!-- akhir embeded maps -->