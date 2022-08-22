<?php


namespace app\controllers;
use app\models\Contact;
use Yii;

class ContactController extends AppController
{
    public function actionIndex() {
        $contact = new Contact();
        if ($contact->load(Yii::$app->request->post())) {
            if ($contact->save()) {
                Yii::$app->session->setFlash('success', 'Ваша заявка была успешно обработана.');
                Yii::$app->mailer->compose('contactto')
                    ->setFrom(['myusername@mail.ru' => 'yii2.loc'])
                    ->setTo($contact->email)
                    ->setSubject($contact->subject)
                    ->send();
                return $this->refresh();

            } else {
                Yii::$app->session->setFlash('error', 'Произошла ошибка в оформлении формы.');
            }
        }
        $this->setMeta('Contact Us | E-Shopper');
        return $this->render('index', compact('contact'));
    }
}