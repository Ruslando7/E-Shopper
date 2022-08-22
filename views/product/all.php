<?php

/** @var yii\web\View $this */
use yii\helpers\Html;

?>

<section id="advertisement">
    <div class="container">
        <img src="/images/shop/advertisement.jpg" alt="" />
    </div>
</section>

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
                        <div class="well">
                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                            <b>$ 0</b> <b class="pull-right">$ 600</b>
                        </div>
                    </div><!--/price-range-->

                    <div class="shipping text-center"><!--shipping-->
                        <img src="/images/home/shipping.jpg" alt="" />
                    </div><!--/shipping-->

                </div>
            </div>
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Products</h2>
                    <?php if (!empty($products)):?>
                    <?php foreach ($products as $product):?>
                    <?php $mainImg = $product->getImage();?>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="<?=\yii\helpers\Url::to(['product/view', 'id' => $product->id])?>">
                                        <?=Html::img("{$mainImg->getUrl()}", ['alt' => ''])?>
                                        <h2>$<?=$product->price?></h2>
                                        <p><?=$product->name?></p>
                                    </a>
                                    <a href="<?=\yii\helpers\Url::to(['cart/add', 'id' => $product->id])?>" data-id="<?=$product->id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                    <div class="clearfix"></div>
                    <?=\yii\widgets\LinkPager::widget([
                            'pagination' => $pages,
                    ]);?>
                    <?php else:?>
                    <h2>Здесь товаров пока нет...</h2>
                    <?php endif;?>
                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>

