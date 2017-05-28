<?php

class ProductController extends Controller
{
	public function actionIndex()
	{
        if(empty($_GET['slug'])){
            throw new CHttpException(404, 'Aradığınız Sayfa Bulunamadı.');
        }

        $product = Product::model()->find(array(
            'condition'=>'slug=:slug AND status=:status',
            'params'=>array(
                ':slug'=>$_GET['slug'],
                ':status'=>productStatus::PUBLISHED
            )
        ));
        if(empty($product)){
            throw new CHttpException(404, 'Aradığınız Sayfa Bulunamadı.');
        }

        $categories = Category::model()->findAll(array(
            'condition'=>'product_id=:product_id AND t.status=:status',
            'params'=>array(
                ':product_id'=>$product->product_id,
                ':status'=>categoryStatus::PUBLISHED
            ),
            'order'=>'t.order ASC'
        ));

		$this->render('index', array(
            'product'=>$product,
            'categories'=>$categories
        ));
	}
}