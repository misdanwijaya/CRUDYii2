<?php

$this->title = 'Demo Model & Form';
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<h1>Demo Form Yii2</h1>
<hr />
<p>Contoh form untuk tambah tim sepakbola.</p>

<?php $form = ActiveForm::begin([
        'id' => 'teams-form',
        'options' => ['class' => 'form-horizontal']
    ])
?>

<div class="form-group">
    <div class="col-lg-6">
    <?= $form->field($model, 'name')->hint('Diisi dengan nama yang terdiri dari angka, huruf kecil atau huruf besar'); ?>
    </div>
</div>

<div class="form-group">
    <div class="col-lg-6">
    <?= $form->field($model, 'country')->hint('Diisi dengan karakter hanya huruf kecil atau huruf besar'); ?>
    </div>
</div>

<div class="form-group">
    <div class="col-lg-6">
    <?= $form->field($model, 'description')->TextArea(); ?>
    </div>
</div>

<div class="form-group">
    <div class="col-lg-6">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary']) ?>
    </div>
</div>

<?php ActiveForm::end(); ?>