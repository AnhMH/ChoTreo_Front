
<div class="hover14 column">
    <div class="agile_top_brand_left_grid">
        <div class="agile_top_brand_left_grid_pos">
            <img src="images/offer.png" alt=" " class="img-responsive" />
        </div>
        <div class="agile_top_brand_left_grid1">
            <figure>
                <div class="snipcart-item block" >
                    <div class="snipcart-thumb">
                        <a href="products.html">
                            <img title=" " alt=" " src="<?php echo $p['image']; ?>" width="150px" height="150px"/>
                        </a>		
                        <p><?php echo $p['name']; ?></p>
                        <div class="stars">
                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                        </div>
                        <h4><?php echo number_format($p['sell_price']); ?></h4>
                    </div>
                    <div class="snipcart-details top_brand_home_details">
                        <form action="#" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" />
                                <input type="hidden" name="business" value=" " />
                                <input type="hidden" name="item_name" value="<?php echo $p['name']; ?>" />
                                <input type="hidden" name="amount" value="<?php echo number_format($p['sell_price']); ?>" />
                                <input type="hidden" name="discount_amount" value="0" />
                                <input type="hidden" name="currency_code" value="VND" />
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