<?php
use frontend\widgets\ViewModal;
use yii\helpers\Url;
use frontend\widgets\viewedProduct;
?>
<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                    <?php
                    use common\models\Product;

                    if(isset($product_banner) && $product_banner != ''){
                        $i = 0;
                        foreach($product_banner as $item){
                            ?>
                                <li data-target="#slider-carousel" data-slide-to="<?= $i ?>"
                                    class="<?= $i ==0?'active':'' ?>"></li>
                            <?php
                            $i++;
                        }
                    }
                    ?>
                    </ol>

                    <div class="carousel-inner">
                        <?php
                        if(isset($product_banner) && $product_banner != ''){
                            $i = 0;
                                foreach($product_banner as $item){
                                ?>
                                    <div class="item <?= $i==0?'active':'' ?>">
                                        <div class="col-sm-6">
                                            <h1 style="font-size: 35px"><span><?= $item->name ?></span></h1>
                                            <p><b>Giá: <span class="tp_002"><?= Product::formatNumber(($item->price*(100-$item->sale))/100)?></span> VND</b> <strike><?= $item->sale > 0 ? $item->price.' VND' : ''  ?></strike></p>
                                            <a type="button" href="<?= Url::to(['product/detail','id'=>$item->id]) ?>" class="btn btn-default get">Xem ngay</a>
                                        </div>
                                        <div class="col-sm-6">
                                            <img style="height:300px" src="<?= $item->getFirstImageLink() ?>" class="girl img-responsive" alt="<?= $item->name?>" />
                                        </div>
                                    </div>
                                <?php
                                    $i++;
                                }
                            }
                        ?>
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
                    <h2>Danh mục sản phẩm</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        <?php
                        if($cat){
                            foreach($cat as $item){
                                ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="<?= Url::to(['product/category','id_cat'=>$item->id]) ?>"><?= $item->name ?></a></h4>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div><!--/category-products-->

                    <div class="shipping text-center"><!--shipping-->
                        <img src="<?= Yii::$app->getUrlManager()->getBaseUrl() ?>/images/home/shipping.jpg" alt="" />
                    </div><!--/shipping-->

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Rượu</h2>
                    <?php
                    if($sale){
                        foreach($sale as $item){
                            ?>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="tp_001 single-products">
                                        <div class="productinfo text-center">
                                            <img style="height: 170px" src="<?= $item->getFirstImageLink() ?>" alt="<?= $item->name ?>" />
                                            <h2 style="font-size: medium">Giá còn: <?= Product::formatNumber(($item->price*(100-$item->sale))/100).' VND'?></h2>
                                            <p>Giá cũ: <span class="tp_002"><?= Product::formatNumber($item->price) ?></span> VND</p>
                                            <p><?= $item->name ?></p>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <?php
                                                if($item->sale != null){
                                                    ?>
                                                    <h2 style="font-size: medium"   >Giá còn: <?= Product::formatNumber(($item->price*(100-$item->sale))/100).' VND'?></h2>
                                                    <?php
                                                }else{
                                                    ?>
                                                    <h2 style="font-size: medium"   >Giá: <?= Product::formatNumber($item->price).' VND'?></h2>
                                                    <?php
                                                }
                                                ?>
                                                <p><?= $item->name ?></p>
                                                <p></p>
                                                <p></p>
                                                <a href="<?= Url::to(['product/detail','id'=>$item->id]) ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem  chi tiết</a>
                                            </div>
                                        </div>
                                        <img src="<?= Yii::$app->getUrlManager()->getBaseUrl() ?>/images/home/sale.png" class="new" alt="" />
                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a href="javascript:void(0)" onclick="addCart(<?= $item->id ?>)"><i class="fa fa-plus-square"></i>Mua ngay</a></li>
                                            <li><a href="<?= Url::to(['product/detail','id'=>$item->id])?>"><i class="fa fa-plus-square"></i>Xem chi tiết</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div><!--features_items-->

                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Bánh</h2>
                    <?php
                    if($product_new){
                        foreach($product_new as $item){
                            ?>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="tp_001 single-products">
                                        <div class="productinfo text-center">
                                            <img style="height: 170px" src="<?= $item->getFirstImageLink() ?>" alt="<?= $item->name ?>" />
                                            <?php
                                            if($item->sale != null || $item->sale != 0){
                                                ?>
                                                    <h2 style="font-size: medium">Giá còn: <?= Product::formatNumber(($item->price*(100-$item->sale))/100).' VND'?></h2>
                                                    <p>Giá cũ: <span class="tp_002"><?= Product::formatNumber($item->price) ?></span> VND</p>
                                                <?php
                                            }else{
                                                ?>
                                                <h2 style="font-size: medium"   >Giá: <?= Product::formatNumber($item->price).' VND'?></h2>
                                                <?php
                                            }
                                            ?>
                                            <p><?= $item->name ?></p>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <?php
                                                if($item->sale != 0){
                                                    ?>
                                                    <h2 style="font-size: medium"   >Giá còn: <?= Product::formatNumber(($item->price*(100-$item->sale))/100).' VND'?></h2>
                                                    <?php
                                                }else{
                                                    ?>
                                                    <h2 style="font-size: medium"   >Giá: <?= Product::formatNumber($item->price).' VND'?></h2>
                                                    <?php
                                                }
                                                ?>
                                                <p><?= $item->name ?></p>
                                                <a href="<?= Url::to(['product/detail','id'=>$item->id])?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
                                            </div>
                                        </div>
                                        <img src="<?= Yii::$app->getUrlManager()->getBaseUrl() ?>/images/home/new.png" class="new" alt="" />
                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a href="javascript:void(0)" onclick="addCart(<?= $item->id ?>)"><i class="fa fa-plus-square"></i>Mua ngay</a></li>
                                            <li><a href="<?= Url::to(['product/detail','id'=>$item->id])?>"><i class="fa fa-plus-square"></i>Xem chi tiết</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }else{
                        ?>
                        Đang cập nhật
                        <?php
                    }
                    ?>
                </div><!--features_items-->

                <?= viewedProduct::Widget()?>
                <?= ViewModal::Widget() ?>
            </div>
        </div>
    </div>
</section>