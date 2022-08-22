<div class="col-sm-3 col-sm-offset-1">
    <div class="single-widget">
        <h2>About Shopper</h2>
        <?php $form = \yii\widgets\ActiveForm::begin(['options' => ['class' => 'searchform']]) ?>
        <input type="email" placeholder="Your email address" name="mail">
        <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
        <p>Get the most recent updates from <br />our site and be updated your self...</p>
        <?php $form->end();?>
    </div>
</div>
