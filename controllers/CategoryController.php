<?php


namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;
use yii\data\Pagination;

class CategoryController extends AppController
{
    public function actionIndex() {
        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
        $products = Product::find()->all();
        $this->setMeta('Home | E-Shopper');
        return $this->render('index', compact('hits', 'products'));
    }

    public function actionView($id) {
        $category = Category::findOne($id);
        if (empty($category)) {
            throw new \yii\web\HttpException(404, 'Такой категории нет.');
        }
//        $products = Product::find()->where(['category_id' => $id])->all(); //no pagination
        $query = Product::find()->where(['category_id' => $id]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        $this->setMeta($category->name . ' | E-Shopper', $category->keywords, $category->description);
        return $this->render('view', compact('products', 'category', 'pages'));
    }

    public function actionSearch() {
        $q = trim(Yii::$app->request->get('q'));
        $this->setMeta('Search | E-Shopper');
        if (!$q)
            return $this->render('search', compact( 'q'));
        $query = Product::find()->where(["like", 'name', $q]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('search', compact('products', 'q', 'pages'));
    }
}