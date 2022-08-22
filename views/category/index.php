<?php

/** @var yii\web\View $this */
use yii\helpers\Html;

?>

<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>E</span>-SHOPPER</h1>
                                <h2>Free E-Commerce Template</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <a href="<?=\yii\helpers\Url::to(['/product/all'])?>" class="btn btn-default get">Get it now</a>
                            </div>
                            <div class="col-sm-6">
                                <img src="/images/home/girl1.jpg" class="girl img-responsive" alt="" />
                                <img src="/images/home/pricing.png"  class="pricing" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>E</span>-SHOPPER</h1>
                                <h2>100% Responsive Design</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <a href="<?=\yii\helpers\Url::to(['/product/all'])?>" class="btn btn-default get">Get it now</a>
                            </div>
                            <div class="col-sm-6">
                                <img src="/images/home/girl2.jpg" class="girl img-responsive" alt="" />
                                <img src="/images/home/pricing.png"  class="pricing" alt="" />
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>E</span>-SHOPPER</h1>
                                <h2>Free Ecommerce Template</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <a href="<?=\yii\helpers\Url::to(['/product/all'])?>" class="btn btn-default get">Get it now</a>
                            </div>
                            <div class="col-sm-6">
                                <img src="/images/home/girl3.jpg" class="girl img-responsive" alt="" />
                                <img src="/images/home/pricing.png" class="pricing" alt="" />
                            </div>
                        </div>

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>

                    <ul class="catalog category-products">
                        <?php echo \app\components\MenuWidget::widget(['tpl' => 'menu'])?>
                    </ul>

                    <div class="price-range"><!--price-range-->
                        <h2>Price Range</h2>
                        <div class="well text-center">
                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                            <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                        </div>
                    </div><!--/price-range-->

                    <div class="shipping text-center"><!--shipping-->
                        <img src="/images/home/shipping.jpg" alt="" />
                    </div><!--/shipping-->

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <?php if (!empty($hits)):?>
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Features Items</h2>
                    <?php foreach ($hits as $hit):?>
                        <?php $mainImg = $hit->getImage();?>
                        <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="<?=\yii\helpers\Url::to(['product/view','id' => $hit->id])?>">
                                        <?= Html::img("{$mainImg->getUrl()}", ['alt' => ''])?>
                                        <h2>$<?=$hit->price?></h2>
                                        <p><?=$hit->name?></p>
                                    </a>
                                    <a href="<?=\yii\helpers\Url::to(['cart/add', 'id' => $hit->id])?>" data-id="<?=$hit->id?>" class="btn btn-default add-to-cart" ><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <?php
                                if ($hit->new) {
                                    echo Html::img("@web/images/home/new.png", ['alt' => 'new', 'class' => 'new']);
                                } else if ($hit->sale) {
                                    echo Html::img("@web/images/home/sale.png", ['alt' => 'sale', 'class' => 'new']);
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div><!--features_items-->
                <?php endif;?>


                <div class="category-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#hit" data-toggle="tab">Hit</a></li>
                            <li><a href="#new" data-toggle="tab">New</a></li>
                            <li><a href="#sale" data-toggle="tab">Sale</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="hit" >
                            <?php $i = 0; foreach($products as $product):?>
                            <?php if($product->hit):?>
                            <?php $hitImg = $product->getImage(); ?>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="<?=\yii\helpers\Url::to(['/product/view', 'id' => $product->id])?>">
                                                <?=Html::img("{$hitImg->getUrl()}", ['alt' => ''])?>
                                                <h2>$<?=$product->price?></h2>
                                                <p><?=$product->name?></p>
                                            </a>
                                            <a href="<?=\yii\helpers\Url::to(['cart/add', 'id' => $product->id])?>" data-id="<?=$product->id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php $i++;?>
                            <?php endif;?>
                            <?php if ($i >=4) break;?>
                            <?php endforeach;?>
                        </div>

                        <div class="tab-pane fade" id="new" >
                            <?php $i = 0; foreach($products as $product):?>
                                <?php if($product->new):?>
                                    <?php $hitImg = $product->getImage(); ?>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <a href="<?=\yii\helpers\Url::to(['/product/view', 'id' => $product->id])?>">
                                                        <?=Html::img("{$hitImg->getUrl()}", ['alt' => ''])?>
                                                        <h2>$<?=$product->price?></h2>
                                                        <p><?=$product->name?></p>
                                                    </a>
                                                    <a href="<?=\yii\helpers\Url::to(['cart/add', 'id' => $product->id])?>" data-id="<?=$product->id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $i++;?>
                                <?php endif;?>
                                <?php if ($i >=4) break;?>
                            <?php endforeach;?>
                        </div>

                        <div class="tab-pane fade" id="sale" >
                            <?php $i = 0; foreach($products as $product):?>
                                <?php if($product->sale):?>
                                    <?php $hitImg = $product->getImage(); ?>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <a href="<?=\yii\helpers\Url::to(['/product/view', 'id' => $product->id])?>">
                                                        <?=Html::img("{$hitImg->getUrl()}", ['alt' => ''])?>
                                                        <h2>$<?=$product->price?></h2>
                                                        <p><?=$product->name?></p>
                                                    </a>
                                                    <a href="<?=\yii\helpers\Url::to(['cart/add', 'id' => $product->id])?>" data-id="<?=$product->id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $i++;?>
                                <?php endif;?>
                                <?php if ($i >=4) break;?>
                            <?php endforeach;?>
                        </div>

                    </div>
                </div><!--/category-tab-->

                <div class="recommended_items">
                    <h2 class="title text-center">recommended items</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php $i = 0; foreach ($hits as $hit):?>
                                <?php $mainImg = $hit->getImage();?>
                                <?php if ($i % 3 == 0):?>
                                    <div class="item <?php if ($i == 0) echo 'active'?>">
                                <?php endif;?>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <a href="<?=\yii\helpers\Url::to(['product/view', 'id' => $hit->id])?>">
                                                    <!--                                                --><?//=Html::img("@web/images/home/$hit->img", ['alt' => "$hit->name"])?>
                                                    <?=Html::img("{$mainImg->getUrl()}", ['alt' => "$hit->name"])?>
                                                    <h2>$<?=$hit->price?></h2>
                                                    <p><?=$hit->name?></p>
                                                </a>
                                                <a href="<?=\yii\helpers\Url::to(['cart/add', 'id' => $hit->id])?>" data-id="<?=$hit->id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++; if ($i % 3 == 0):?>
                                    </div>
                                <?php endif;?>
                            <?php endforeach;?>
                        </div>
                        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div><!--/recommended_items-->

            </div>
        </div>
    </div>
</section>
