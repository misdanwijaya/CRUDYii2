<?php

$this->title = 'Demo Model & Form';
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<h1>Demo Form Yii2</h1>
<hr />
<p>Contoh form untuk pendaftaran member.</p>

<?php $form = ActiveForm::begin([
        'id' => 'registration-form',
        'options' => ['class' => 'form-horizontal']
    ])
?>

<div class="form-group">
    <div class="col-lg-6">
    <?= $form->field($model, 'username')->hint('Diisi dengan nama yang terdiri dari angka, huruf kecil atau huruf besar'); ?>
    </div>
</div>

<div class="form-group">
    <div class="col-lg-6">
    <?= $form->field($model, 'email')->hint('Diisi dengan e-mail pribadi Anda'); ?>
    </div>
</div>

<div class="form-group">
    <div class="col-lg-6">
    <?= $form->field($model, 'password')->passwordInput(); ?>
    </div>
</div>

<div class="form-group">
    <div class="col-lg-6">
    <?= $form->field($model, 'confirm_password')->passwordInput(); ?>
    </div>
</div>

<div class="form-group">
    <div class="col-lg-6">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary']) ?>
    </div>
</div>

<?php ActiveForm::end(); ?>