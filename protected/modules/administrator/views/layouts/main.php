<?php
Yii::app()->bootstrap->register();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <title>DocIzy Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }
    </style>
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="<?php echo Yii::app()->createUrl('/administrator/'); ?>">Docizy Admin</a>
            <div class="nav-collapse collapse">
                <p class="navbar-text pull-right">
                    Hoşgeldin, <?php echo Yii::app()->user->name_surname; ?> | <a href="<?php echo Yii::app()->createUrl('administrator/auth/logout'); ?>" class="navbar-link">Çıkış</a>
                </p>
                <ul class="nav">
                    <li><a href="<?php echo Yii::app()->createUrl('/administrator/'); ?>">Panel Anasayfa</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('site/index'); ?>">Site Anasayfa</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span2">
            <div class="well sidebar-nav">
                <ul class="nav nav-list">

                    <li class="nav-header">Proje</li>
                    <li><a href="<?php echo Yii::app()->createUrl('administrator/product/admin'); ?>">Projeler</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('administrator/product/create'); ?>">Yeni Proje</a></li>

                    <li class="nav-header">Kategori</li>
                    <li><a href="<?php echo Yii::app()->createUrl('administrator/category/admin'); ?>">Kategoriler</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('administrator/category/create'); ?>">Yeni Kategori</a></li>

                    <li class="nav-header">Döküman</li>
                    <li><a href="<?php echo Yii::app()->createUrl('administrator/article/admin'); ?>">Dökümanlar</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('administrator/article/create'); ?>">Yeni Döküman</a></li>

                    <li class="nav-header">Editör</li>
                    <li><a href="<?php echo Yii::app()->createUrl('administrator/editor/admin'); ?>">Editörler</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('administrator/editor/create'); ?>">Yeni Editör</a></li>
                </ul>
            </div><!--/.well -->
        </div><!--/span-->
        <div class="span10">
            <?php echo $content; ?>
        </div><!--/span-->
    </div><!--/row-->

    <hr>

    <footer>
        <p>&copy; DocIzy <?php echo date('Y'); ?></p>
    </footer>

</div>

</body>
</html>
