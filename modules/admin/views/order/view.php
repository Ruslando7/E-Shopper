<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */

$this->title = 'Заказ №' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="order-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'created_at',
            'updated_at',
            'qty',
            'sum',
//            'status',
            [
                'attribute' => 'status',
                'value' => !$model->status ? "<span class='text-danger'>Активен</span>" : "<span class='text-success'>Завершен</span>",
                'format' => 'html'
            ],
            'name',
            'email:email',
            'phone',
            'address',
        ],
    ]) ?>
    <?php $items = $model->orderItems;?>
    <table class="table table-responsive table-hover view">
        <thead>
        <tr>
            <th>Наименование</th>
            <th>Количество</th>
            <th>Цена</th>
            <th>Сумма</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php foreach ($items as $item): ?>
            <td><a href="<?=\yii\helpers\Url::to(['/product/view', 'id' => $item->product_id])?>"><?=$item['name']?></a></td>
            <td><?=$item['qty_item']?></td>
            <td><?=$item['price']?></td>
            <td><?=$item['sum_item']?></td>
        </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>
