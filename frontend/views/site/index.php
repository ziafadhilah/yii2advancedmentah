<?php

use app\models\Images;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<style>
  .tab {
    overflow: hidden;
    text-align: center;
  }

  /* Style the buttons inside the tab */
  .tab button {
    background-color: inherit;
    float: center;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 25px;
    font-weight: bold;
    color:#ccc;
    
  }

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
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?= Yii::getAlias('@web/img/slider-1.png'); ?>" alt=" First slide">
        <div class="carousel-caption d-none d-md-block">
          <h1>Kayu Online</h1>
          <h3>Supplier Kayu Terbaik di Indonesia</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?= Yii::getAlias('@web/img/slider-2.png'); ?>" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?= Yii::getAlias('@web/img/slider-3.png'); ?>" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<div class="container">
  <div class="tab">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#ko">Kayu Olahan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#dk">Deking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#ks">Kusen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#pt">Pintu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#lp">Lis Profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#tg">Tangga</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div id="ko" class="container tab-pane active"><br>
        <?php if (!empty(Images::getImagesKO())) {
          foreach (Images::getImagesKO() as $key) : ?>
            <div class="col-md-3">
              <div class="product-top">
                <div class="thumb-img">
                  <?= $key->image?>
                </div>
              </div>
              <div class="product-bottom text-center">
                <?= $key->product_id?>
              </div>
            </div>
        <?php endforeach; }
        else { ?>
        <center>
            <h3>Coming Soon!</h3>
        </center>
        <?php } ?>
      </div>
      <div id="dk" class="container tab-pane fade"><br>
        <?php if (!empty(Images::getImagesDK())) {
          foreach (Images::getImagesDK() as $key) : ?>
            <div class="col-md-3">
              <div class="product-top">
                <div class="thumb-img">
                  <?= $key->image?>
                </div>
              </div>
              <div class="product-bottom text-center">
                <?= $key->product_id?>
              </div>
            </div>
        <?php endforeach; }
        else { ?>
        <center>
            <h3>Coming Soon!</h3>
        </center>
        <?php } ?>
      </div>
      <div id="ks" class="container tab-pane fade"><br>
        <?php if (!empty(Images::getImagesKS())) {
          foreach (Images::getImagesKS() as $key) : ?>
            <div class="col-md-3">
              <div class="product-top">
                <div class="thumb-img">
                  <?= $key->image?>
                </div>
              </div>
              <div class="product-bottom text-center">
                <?= $key->product_id?>
              </div>
            </div>
        <?php endforeach; }
        else { ?>
        <center>
            <h3>Coming Soon!</h3>
        </center>
        <?php } ?>
      </div>
      <div id="pt" class="container tab-pane fade"><br>
        <?php if (!empty(Images::getImagesPT())) {
          foreach (Images::getImagesPT() as $key) : ?>
            <div class="col-md-3">
              <div class="product-top">
                <div class="thumb-img">
                  <?= $key->image?>
                </div>
              </div>
              <div class="product-bottom text-center">
                <?= $key->product_id?>
              </div>
            </div>
        <?php endforeach; }
        else { ?>
        <center>
            <h3>Coming Soon!</h3>
        </center>
        <?php } ?>
      </div>
      <div id="lp" class="container tab-pane fade"><br>
        <?php if (!empty(Images::getImagesLP())) {
          foreach (Images::getImagesLP() as $key) : ?>
            <div class="col-md-3">
              <div class="product-top">
                <div class="thumb-img">
                  <?= $key->image?>
                </div>
              </div>
              <div class="product-bottom text-center">
                <?= $key->product_id?>
              </div>
            </div>
        <?php endforeach; }
        else { ?>
        <center>
            <h3>Coming Soon!</h3>
        </center>
        <?php } ?>
      </div>
      <div id="tg" class="container tab-pane fade"><br>
        <?php if (!empty(Images::getImagesTG())) {
          foreach (Images::getImagesTG() as $key) : ?>
            <div class="col-md-3">
              <div class="product-top">
                <div class="thumb-img">
                  <?= $key->image?>
                </div>
              </div>
              <div class="product-bottom text-center">
                <?= $key->product_id?>
              </div>
            </div>
        <?php endforeach; }
        else { ?>
        <center>
            <h3>Coming Soon!</h3>
        </center>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
