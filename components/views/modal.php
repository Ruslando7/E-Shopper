<div id="cart" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Корзина:</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Продолжить покупки</button>
                <a href="<?=\yii\helpers\Url::to(['cart/view'])?>" class="btn btn-success">Оформить заказ</a>
                <button id="clear" type="button" class="btn btn-danger">Очистить корзину</button>
            </div>
        </div>
    </div>
</div>


