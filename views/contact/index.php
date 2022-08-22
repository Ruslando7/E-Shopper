<div id="contact-page" class="container">
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
    <div class="bg">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="title text-center">Contact <strong>Us</strong></h2>
                <div id="gmap" class="contact-map">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A1c472ee64b404ca62283cd6dca1e97cb189e007b5b39c7e76a527bac8c809eee&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="contact-form">
                    <h2 class="title text-center">Get In Touch</h2>
                    <div class="status alert alert-success" style="display: none"></div>
                    <?php $form = \yii\widgets\ActiveForm::begin();?>
                    <?php echo $form->field($contact, 'name', [ 'options' => ['class' => 'col-md-6 form-group'], 'inputOptions' => ['placeholder' => 'Name', 'class' => 'form-control']])->label(false)?>
                    <?php echo $form->field($contact, 'email', [ 'options' => ['class' => 'col-md-6 form-group'], 'inputOptions' => ['placeholder' => 'Email', 'class' => 'form-control']])->input('email')->label(false)?>
                    <?php echo $form->field($contact, 'subject', [ 'options' => ['class' => 'col-md-12 form-group'], 'inputOptions' => ['placeholder' => 'Subject', 'class' => 'form-control']])->label(false)?>
                    <?php echo $form->field($contact, 'text', [ 'options' => ['class' => 'col-md-12 form-group'], 'inputOptions' => ['placeholder' => 'Your message', 'class' => 'form-control']])->textarea(['rows' => 8])->label(false)?>
                    <div class="col-md-12 form-group">
                        <?php echo \yii\helpers\Html::submitButton('Submit', ['class' => 'btn btn-success pull-right'])?>
                    </div>
                    <?php $form->end(); ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact-info">
                    <h2 class="title text-center">Contact Info</h2>
                    <address>
                        <p>E-Shopper Inc.</p>
                        <p>935 W. Webster Ave New Streets Chicago, IL 60614, NY</p>
                        <p>Newyork USA</p>
                        <p>Mobile: +2346 17 38 93</p>
                        <p>Fax: 1-714-252-0026</p>
                        <p>Email: info@e-shopper.com</p>
                    </address>
                    <div class="social-networks">
                        <h2 class="title text-center">Social Networking</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/#contact-page-->

