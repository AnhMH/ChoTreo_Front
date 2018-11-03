<!-- navigation -->
<div class="navigation-agileits">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div> 
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo $BASE_URL;?>" class="act"><?php echo __('LABEL_HOME');?></a></li>
                    <?php if (!empty($settings['cates'])): ?>
                    <?php foreach ($settings['cates'] as $val): ?>
                    <li><a href="<?php echo $BASE_URL.'/danh-muc/'.$val['url'];?>"><?php echo $val['name']; ?></a></li>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </div>
</div>

<!-- //navigation -->
