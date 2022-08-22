<?php


namespace app\controllers;
use yii;
use app\models\Product;
use app\models\Cart;
use app\models\Order;
use app\models\OrderItems;
use app\models\Oorder;

class CartController extends AppController
{
    public function actionAdd() {
        $id = Yii::$app->request->get('id');
        $qty = (int)Yii::$app->request->get('qty');
        $qty = !$qty ? 1 : $qty;
        $product = Product::findOne($id);
        if (empty($product)) return false;
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart;
        $cart->addToCart($product, $qty);
        if (!Yii::$app->request->isAjax)
            return $this->redirect(Yii::$app->request->referrer);
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }

    public function actionClear() {
        $this->layout = false;
        $session = Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.qty');
        $session->remove('cart.sum');
        return $this->render('cart-modal', compact('session'));
    }

    public function actionDelItem() {
        $id = Yii::$app->request->get('id');
        $this->layout = false;
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart;
        $cart->recalc($id);
        return $this->render('cart-modal', compact('session'));
    }

    public function actionDel() {
        $id = Yii::$app->request->post('id');
        $this->layout = false;
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart;
        $cart->recalc($id);
        $order = new Order;
//        $this->redirect('/cart/view');
        return $this->render('view', compact('session', 'order'));
    }

    public function actionShow() {
        $session = Yii::$app->session;
        $session->open();
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }

    public function actionView() {
        $session = Yii::$app->session;
        $session->open();
        $order = new Order;
        if ($order->load(Yii::$app->request->post())) {
            $order->qty = $session['cart.qty'];
            $order->sum = $session['cart.sum'];
            if ($order->save()) {
                $this->saveOrderItems($session['cart'], $order->id);
                Yii::$app->session->setFlash('success', 'Ваш заказ был успешно обработан.');
                Yii::$app->mailer->compose('mailto', compact('session'))
                    ->setFrom(['myusername@mail.ru' => 'yii2.loc'])
                    ->setTo($order->email)
                    ->setSubject('Ваш заказ')
                    ->send();
                $session->remove('cart');
                $session->remove('cart.qty');
                $session->remove('cart.sum');
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Произошла ошибка в оформлении заказа.');
            }
        }
        $this->setMeta('Корзина | E-Shopper');
        return $this->render('view', compact('session', 'order'));
    }

    protected function saveOrderItems($items, $order_id) {
        foreach ($items as $id => $item) {
            $order_item = new OrderItems();
            $order_item->order_id = $order_id;
            $order_item->product_id = $id;
            $order_item->name = $item['name'];
            $order_item->price = $item['price'];
            $order_item->qty_item = $item['qty'];
            $order_item->sum_item = $item['qty'] * $item['price'];
            $order_item->save();
        }
    }
}