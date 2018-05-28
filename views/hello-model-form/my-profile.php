<?php

$this->title = 'Demo Model & Form';
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<h1>Demo Form Yii2</h1>
<hr />
<p>Contoh form untuk pengaturan profil member.</p>

<?php $form = ActiveForm::begin([
        'id' => 'my-profile-form',
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
    <?= $form->field($model, 'gender')->radioList([ 
                                                        'Pria' => 'Pria', 
                                                        'wanita' => 'Wanita',
                                                    ]); ?>
    </div>
</div>

<div class="form-group">
    <div class="col-lg-6">
    <?= $form->field($model, 'phone'); ?>
    </div>
</div>

<div class="form-group">
    <div class="col-lg-6">
    <?= $form->field($model, 'website'); ?>
    </div>
</div>

<div class="form-group">
    <div class="col-lg-6">
    <?= $form->field($model, 'jobs')->dropdownList([
                                                    "akuntan"=>"Akuntan", 
                                                    "manager_proyek"=>"Proyek Manager",
                                                    "konsultan_hukum"=>"Konsultan Hukum",
                                                    "dosen"=>"Dosen",
                                                    "administrasi"=>"Administrasi",
                                                ], ['prompt'=>'Pilih pekerjaan Anda saat ini']); ?>
    </div>
</div>

<div class="form-group">
    <div class="col-lg-6">
    <?= $form->field($model, 'hobby[]')->checkboxList([ 
                                                        'baca_buku' => 'Membaca Buku', 
                                                        'futsal' => 'Futsal', 
                                                        'hiking' => 'Naik Gunung',
                                                        'programming' => 'Ngoding Santai di Pantai',
                                                        'sepeda' => 'Bersepeda',
                                                        'fotografi' => 'Popotoan',
                                                        'kuliner' => 'Makan di tempat mahal',
                                                    ]); ?>
    </div>
</div>

<div class="form-group">
    <div class="col-lg-6">
    <?= $form->field($model, 'photo')->fileInput(); ?>
    </div>
</div>

<div class="form-group">
    <div class="col-lg-6">
    <?= $form->field($model, 'about')->textArea(); ?>
    </div>
</div>


<div class="form-group">
    <div class="col-lg-6">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary']) ?>
    </div>
</div>

<?php ActiveForm::end(); ?>