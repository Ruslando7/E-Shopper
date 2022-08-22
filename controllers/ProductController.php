<?php


namespace app\controllers;
use Yii;
use app\models\Category;
use app\models\Product;
use yii\data\Pagination;

class ProductController extends AppController
{
    public function actionView($id) {
        $id = yii::$app->request->get('id');
        $product = Product::findOne($id); //Используем ленивую (отложенную) загрузку
        if (empty($product)) {
            throw new \yii\web\HttpException(404, 'Такого товара больше нет.');
        }
        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
        $this->setMeta($product->name . " | E-Shopper", $product->keywords, $product->description);
        return $this->render('view', compact('product', 'hits'));
    }

    public function actionAll() {
        $query = Product::find();
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 9, 'forcePageParam' => false, 'pageSizeParam' => false ]);
        $products = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $this->setMeta('Products' . " | E-Shopper");
        return $this->render('all', compact('products', 'pages'));
    }

}