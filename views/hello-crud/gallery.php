<?php

use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
use yii\helpers\Html;

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
                'Gallery',
            ],
        ]);

        ?>
    </div>
</div>

<div>   
    <div class="col-md-2">
        <div class="list-group">
          <a href="<?php echo Url::to(['hello-crud/add-photo', 'id'=>$team['id']]); ?>" class="list-group-item"><i class="glyphicon glyphicon-eye-open"></i> Add New</a>
        </div>
    </div>
    <div class="col-md-10">
        <table class="table table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Description</th>
                <th>File Path</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <?php if (count($galleries) > 0) { ?>
                    <?php foreach ($galleries as $item): ?>
                        <tr>
                            <td><?= Html::encode("{$item['name']}") ?></td>
                            <td><?= Html::encode("{$item['description']}") ?></td>
                            <td><?= Html::encode("{$item['filepath']}") ?></td>
                            <td style="width:15%;text-align:center;">
                                <a class="btn btn-success btn-sm" href="<?php echo Url::to(['hello-crud/edit-photo', 'id'=>$team['id'], 'gal_id'=>$item['id']]); ?>"><i class="glyphicon glyphicon-pencil"></i></a> 
                                <a class="btn btn-danger btn-sm" href="<?php echo Url::to(['hello-crud/delete-photo', 'id'=>$team['id'], 'gal_id'=>$item['id']]); ?>"><i class="glyphicon glyphicon-trash"></i></a> 
                            </td>
                          </tr>
                    <?php endforeach; ?>
                <?php } else { ?>
                <tr>
                    <td style="text-align:center;font-size:15px;padding:25px;" colspan="5">No data found...</td>
                </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>