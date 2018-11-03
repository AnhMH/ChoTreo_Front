<?php if (!empty($data['sliders'])): ?>
<!-- main-slider -->
<ul id="demo1">
    <?php foreach ($data['sliders'] as $s): ?>
    <?php if ($s['type'] == 1): ?>
    <li>
        <img src="<?php echo $s['image']; ?>" alt="<?php echo $s['text']; ?>" />
        <!--Slider Description example-->
        <div class="slide-desc">
            <h3><?php echo $s['text']; ?></h3>
        </div>
    </li>
    <?php endif; ?>
    <?php endforeach; ?>
</ul>
<?php endif; ?>
<!-- //main-slider -->
<!-- //top-header and slider -->
<!-- top-brands -->
<div class="top-brands">
    <div class="container">
        <h2>TOP</h2>
        <div class="grid_3 grid_5">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">Sản phẩm</a></li>
                    <li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">Cửa hàng</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
                        <div class="agile-tp">
                            <h5>Sản phẩm nổi bật trong tuần</h5>
                            <p class="w3l-ad">We've pulled together all our advertised offers into one place, so you won't miss out on a great deal.</p>
                        </div>
                        <div class="agile_top_brands_grids">
                            <?php if (!empty($data['products'])): ?>
                                <?php foreach ($data['products'] as $p): ?>
                                    <div class="col-md-4 top_brand_left" style="margin-bottom:40px;">
                                        <?php echo $this->element('product_list', array('p' => $p)); ?>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">
                        <div class="agile-tp">
                            <h5>This week</h5>
                            <p class="w3l-ad">We've pulled together all our advertised offers into one place, so you won't miss out on a great deal.</p>
                        </div>
                        <div class="agile_top_brands_grids">
                            <div class="col-md-4 top_brand_left">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid">
                                        <div class="agile_top_brand_left_grid_pos">
                                            <img src="images/offer.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block" >
                                                    <div class="snipcart-thumb">
                                                        <a href="products.html"><img title=" " alt=" " src="images/7.png" /></a>		
                                                        <p>Sona-masoori-rice</p>
                                                        <div class="stars">
                                                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                                        </div>
                                                        <h4>$35.99 <span>$55.00</span></h4>
                                                    </div>
                                                    <div class="snipcart-details top_brand_home_details">
                                                        <form action="#" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="cmd" value="_cart" />
                                                                <input type="hidden" name="add" value="1" />
                                                                <input type="hidden" name="business" value=" " />
                                                                <input type="hidden" name="item_name" value="Fortune Sunflower Oil" />
                                                                <input type="hidden" name="amount" value="35.99" />
                                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                                <input type="hidden" name="currency_code" value="USD" />
                                                                <input type="hidden" name="return" value=" " />
                                                                <input type="hidden" name="cancel_return" value=" " />
                                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //top-brands -->
<!-- Carousel
   ================================================== -->
<?php if (!empty($data['sliders'])): $si = 0;?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php foreach ($data['sliders'] as $s): ?>
        <?php if ($s['type'] == 2): ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $si;?>" <?php echo $si == 0 ? 'class="active"' : '';?>></li>
        <?php $si++; endif; ?>
        <?php endforeach; ?>
    </ol>
    <div class="carousel-inner" role="listbox">
        <?php $si = 0; foreach ($data['sliders'] as $s): ?>
        <?php if ($s['type'] == 2): ?>
        <div class="item <?php echo $si == 0 ? 'active' : '';?>">
            <a href="<?php echo !empty($s['link']) ? $s['link'] : '#'; ?>"> 
                <img class="first-slide" src="<?php echo $s['image']; ?>" alt="<?php echo $s['text']; ?>">
            </a>
        </div>
        <?php $si++; endif; ?>
        <?php endforeach; ?>
    </div>
</div><!-- /.carousel -->	
<?php endif; ?>

<!--banner-bottom-->
<div class="ban-bottom-w3l">
    <div class="container">
        <div class="col-md-6 ban-bottom3">
            <div class="ban-top">
                <img src="images/p2.jpg" class="img-responsive" alt=""/>

            </div>
            <div class="ban-img">
                <div class=" ban-bottom1">
                    <div class="ban-top">
                        <img src="images/p3.jpg" class="img-responsive" alt=""/>

                    </div>
                </div>
                <div class="ban-bottom2">
                    <div class="ban-top">
                        <img src="images/p4.jpg" class="img-responsive" alt=""/>

                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-6 ban-bottom">
            <div class="ban-top">
                <img src="images/111.jpg" class="img-responsive" alt=""/>


            </div>
        </div>

        <div class="clearfix"></div>
    </div>
</div>
<!--banner-bottom-->
<!--brands-->
<div class="brands">
    <div class="container">
        <h3>Brand Store</h3>
        <div class="brands-agile">
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Lorem</a></p>
                </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Lorem</a></p>
                </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Lorem</a></p>
                </div>
            </div>

            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Lorem</a></p>
                </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Lorem</a></p>
                </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Lorem</a></p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="brands-agile-1">
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Lorem</a></p>
                </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Lorem</a></p>
                </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Lorem</a></p>
                </div>
            </div>

            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Lorem</a></p>
                </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Lorem</a></p>
                </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Lorem</a></p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="brands-agile-2">
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Lorem</a></p>
                </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Lorem</a></p>
                </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Lorem</a></p>
                </div>
            </div>

            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Lorem</a></p>
                </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Lorem</a></p>
                </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Lorem</a></p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>	
<!--//brands-->
<!-- new -->
<div class="newproducts-w3agile">
    <div class="container">
        <h3>Sản phẩm mới</h3>
        <div class="agile_top_brands_grids">
            <?php if (!empty($data['products'])): ?>
                <?php foreach ($data['products'] as $p): ?>
                <div class="col-md-3 top_brand_left-1">
                    <?php echo $this->element('product_list', array('p' => $p)); ?>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //new -->
<!-- //footer -->
