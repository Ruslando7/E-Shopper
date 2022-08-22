<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

<!--    --><?//= $form->field($model, 'category_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\modules\admin\models\Category::find()->all(), 'id', 'name'))?>

    <div class="form-group field-product-category_id required has-success">
        <label class="control-label" for="product-category_id">Категория</label>
        <select id="product-category_id" class="form-control" name="Product[category_id]" aria-required="true" aria-invalid="false">
            <?=\app\components\MenuWidget::widget(['tpl' => 'category_products', 'model' => $model])?>
        </select>
    </div>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?=$form->field($model, 'content')->widget(CKEditor::class, [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[/* Some CKEditor Options */]),
    ]);?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'gallery[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <?= $form->field($model, 'hit')->dropDownList([ '0' => "Нет", '1' => "Да", ]) ?>

    <?= $form->field($model, 'new')->dropDownList([ '0' => "Нет", '1' => "Да", ]) ?>

    <?= $form->field($model, 'sale')->dropDownList([ '0' => "Нет", '1' => "Да", ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
