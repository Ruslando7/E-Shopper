<?php


namespace app\components;
use yii\base\Widget;
use Yii;


class MailWidget extends Widget
{
    public function run() {
        if (Yii::$app->request->post('mail')) {
            $mail = Yii::$app->request->post('mail');
            Yii::$app->mailer->compose('contactto')
                ->setFrom(['myusername@mail.ru' => 'yii2.loc'])
                ->setTo($mail)
                ->setSubject('About Shopper')
                ->send();
        }
        return $this->render('mail');
    }

}