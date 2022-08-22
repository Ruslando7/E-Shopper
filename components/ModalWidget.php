<?php


namespace app\components;


use yii\base\Widget;

class ModalWidget extends Widget
{
    public function run()
    {
        return $this->render('modal');
    }

}