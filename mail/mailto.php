<table class="table table-responsive table-hover">
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
        <?php foreach ($session['cart'] as $id => $item): ?>
        <td><?=$item['name']?></td>
        <td><?=$item['qty']?></td>
        <td><?=$item['price']?></td>
        <td><?=$item['price']*$item['qty']?></td>
    </tr>
    <?php endforeach;?>
    <tr>
        <td class="left" colspan="3">Итого: </td>
        <td><?=$session['cart.qty']?></td>
    </tr>
    <tr>
        <td class="left" colspan="3">На сумму: </td>
        <td><?=$session['cart.sum']?></td>
    </tr>
    </tbody>
</table>


