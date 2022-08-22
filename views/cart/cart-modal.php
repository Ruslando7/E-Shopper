<?php if (!empty($session['cart'])):?>
<table class="table table-responsive table-hover">
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
            <td><?=$item['name']?></td>
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
<?php else:?>
<h3>Корзина пуста</h3>
<?php endif;?>
