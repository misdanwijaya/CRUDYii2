<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;

$this->title = "Hello CRUD";

?>

<div class="row">
    <div class="col-md-12">
        <h1><?php echo $team['name'] ?> Gallery</h1>
        <hr/>

        <?php

        echo Breadcrumbs::widget([
            'itemTemplate' => "<li>{link}</li>\n", // template for all links
            'links' => [
                ['label' => 'Team List', 'url' => ['hello-crud/index']],
                ['label' => $team['name'], 'url' => ['hello-crud/detail', 'id'=>$team['id']]],
                ['label' => 'Gallery', 'url' => ['hello-crud/gallery', 'id'=>$team['id']] ],
                'Add New',
            ],
        ]);

        ?>
    </div>
</div>

<div>   
    <div class="col-md-12">
        <?php $form = ActiveForm::begin([
                'id' => 'teams-form',
                'options' => ['class' => 'form-horizontal', 'enctype' => 'multipart/form-data']
            ])
        ?>

        <div class="form-group">
            <div class="col-lg-8">
            <?= $form->field($forms, 'photo')->fileInput(); ?>
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-8">
            <?= $form->field($forms, 'name')->hint('Diisi dengan nama yang terdiri dari angka, huruf kecil atau huruf besar'); ?>
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-8">
            <?= $form->field($forms, 'description')->TextArea(); ?>
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-8">
                <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>