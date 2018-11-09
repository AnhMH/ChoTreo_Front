<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="<?php echo $BASE_URL;?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><?php echo __('LABEL_HOME');?></a></li>
            <li class="active">Hàng khuyến mãi</li>
        </ol>
    </div>
</div>
<!-- //breadcrumbs -->
<!--- household --->
<div class="products">
    <div class="container">
        <div class="col-md-12 products-right">
            <div class="agile_top_brands_grids">
                <?php if (!empty($coupons)): ?>
                <?php foreach ($coupons as $c): ?>
                    <?php echo $this->element('coupon_list', array('c' => $c)); ?>
                <?php endforeach; ?>
                <?php endif; ?>
                <div class="clearfix"> </div>
            </div>
            <?php echo $this->Paginate->render($total, $limit); ?>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!--- household --->