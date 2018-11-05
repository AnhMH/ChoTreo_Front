<!DOCTYPE html>
<html>
<head>
<title></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo $BASE_URL;?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $BASE_URL;?>/css/skdslider.css" rel="stylesheet">
<link href="<?php echo $BASE_URL;?>/css/style.css?<?php echo VERSION_DATE;?>" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="<?php echo $BASE_URL;?>/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

</head>
	
<body>
<?php echo $this->element('header'); ?>
<?php echo $this->element('nav'); ?>
<?= $this->fetch('content') ?>
<?php echo $this->element('footer'); ?>

<script type="text/javascript">
    var BASE_URL = '<?php echo $BASE_URL;?>';
    var controller = '<?php echo $controller; ?>';
    var action = '<?php echo $action; ?>';
    var currentUrl = '<?php echo $current_url; ?>';
    var referer = '<?php echo $referer;?>';
    var _csrfToken = '<?php echo $this->request->getParam('_csrfToken');?>';
</script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo $BASE_URL;?>/js/jquery-1.11.1.min.js"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo $BASE_URL;?>/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo $BASE_URL;?>/js/easing.js"></script>
<!-- start-smoth-scrolling -->
<script src="<?php echo $BASE_URL;?>/js/bootstrap.min.js"></script>
<script src="<?php echo $BASE_URL;?>/js/skdslider.min.js"></script>
<script src="<?php echo $BASE_URL;?>/js/common.js?<?php echo VERSION_DATE;?>"></script>
</body>
</html>
