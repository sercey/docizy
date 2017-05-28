<?php
$top_products = Product::model()->findAll('status=:status', array('status'=>productStatus::PUBLISHED));
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Cozumeks.com Dökümantasyon">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Dökümantasyon</title>

    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/prettify.css">
</head>
<body >
<nav>
    <div class="container">
        <h1>Dökümantasyon</h1>
        <div id="menu">
            <ul class="toplinks">
                <?php foreach($top_products as $_product): ?>
                    <li><a href="<?php echo Yii::app()->createUrl('product/index', array('slug'=>$_product->slug)); ?>"><?php echo $_product->name; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <a id="menu-toggle" href="#" class=" ">&#9776;</a>
    </div>
</nav>

<!-- Content -->
<?php echo $content; ?>

<footer>
    <div class="container">
        <p> &copy; <?php echo date('Y'); ?> cozumeks.com </p>
    </div>
</footer>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery.min.js"></script>

<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/prettify/prettify.js"></script>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?skin=sunburst"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/layout.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery.localscroll-1.2.7.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery.scrollTo-1.4.3.1.js" type="text/javascript"></script>

</body>
</html>
