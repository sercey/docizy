<?php
/* @var $this ProductController */
/* @var $product Product */
/* @var $categories Category[] */
?>
<header>
    <div class="container">
        <h2 class="docs-header"><?php echo $product->name; ?></h2>
    </div>
</header>
<section>
    <div class="container">
        <ul class="docs-nav" id="menu-left">
            <?php
            foreach($categories as $category):
                $_articles = Article::model()->findAll(array(
                    'condition'=>'category_id=:cat_id AND t.status=:status',
                    'params'=>array(
                        ':cat_id'=>$category->category_id,
                        ':status'=>articleStatus::PUBLISHED
                    ),
                    'order'=>'t.order DESC'
                ));
            ?>
                <li><strong><?php echo $category->name; ?></strong></li>
                <?php foreach($_articles as $article): ?>
                    <li><a href="#<?php echo $article->article_id; ?>" class=" "><?php echo $article->title; ?></a></li>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </ul>
        <div class="docs-content">
            <?php
            foreach($categories as $category):
                $_articles = Article::model()->findAll(array(
                    'condition'=>'category_id=:cat_id AND t.status=:status',
                    'params'=>array(
                        ':cat_id'=>$category->category_id,
                        ':status'=>articleStatus::PUBLISHED
                    ),
                    'order'=>'t.order DESC'
                ));
                ?>
                <h2><?php echo $category->name; ?></h2>
                <?php echo $category->description; ?>
                <?php foreach($_articles as $article): ?>
                    <h3 id="<?php echo $article->article_id; ?>"><?php echo $article->title; ?></h3>
                    <?php echo $article->content; ?>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="vibrant centered">
    <div class="container">
        <h4><?php echo $product->description; ?></h4>
    </div>
</section>