<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div class="container">
    <?php if (Yii::$app->session->hasFlash('success')):?>
        <div class="alert alert-success alert-dismissible show" role="alert">
            <?= Yii::$app->session->getFlash('success') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    <?php endif;?>

    <?php if(Yii::$app->session->hasFlash('error')):?>
        <div class="alert alert-danger alert-dismissible show" role="alert">
            <?= Yii::$app->session->getFlash('error') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    <?php endif;?>
    <?php if (!empty($session['cart'])):?>
        <table id="table" class="table table-responsive table-hover">
            <thead>
            <tr>
                <th>Фото</th>
                <th>Наименование</th>
                <th>Количество</th>
                <th>Цена</th>
                <th>Сумма</th>
                <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php foreach ($session['cart'] as $id => $item): ?>
                <td><?= \yii\helpers\Html::img("{$item['img']}", ['alt' => $item['name'], 'height' => '100px'])?></td>
                <td><a href="<?=\yii\helpers\Url::to(['product/view', 'id' => $id])?>"><?=$item['name']?></a></td>
                <td><?=$item['qty']?></td>
                <td><?=$item['price']?></td>
                <td><?=$item['price']*$item['qty']?></td>
                <td><span class="glyphicon glyphicon-remove text-danger del-item" data-id="<?=$id?>" aria-hidden="true"></span></td>
            </tr>
            <?php endforeach;?>
            <tr>
                <td class="left" colspan="5">Итого: </td>
                <td><?=$session['cart.qty']?></td>
            </tr>
            <tr>
                <td class="left" colspan="5">На сумму: </td>
                <td><?=$session['cart.sum']?></td>
            </tr>
            </tbody>
        </table>
        <hr/>
        <?php $form = ActiveForm::begin()?>
        <?= $form->field($order, 'name')?>
        <?= $form->field($order, 'email')->input('email')?>
        <?= $form->field($order, 'phone')?>
        <?= $form->field($order, 'address')?>
        <?= Html::submitButton('Заказать', ['class' => 'btn btn-success'])?>
        <?php ActiveForm::end()?>
    <?php else:?>
        <h3>Корзина пуста</h3>
    <?php endif;?>
</div>
