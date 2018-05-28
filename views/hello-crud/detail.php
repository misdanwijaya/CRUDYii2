<?php

use yii\widgets\Breadcrumbs;
use yii\helpers\Url;

$this->title = "Hello CRUD";

?>


<div class="row">
    <div class="col-md-12">
        <h1><?php echo $team['name'] ?></h1>
        <hr/>

        <?php

        echo Breadcrumbs::widget([
            'itemTemplate' => "<li>{link}</li>\n", // template for all links
            'links' => [
                ['label' => 'Team List', 'url' => ['hello-crud/index']],
                $team['name'],
            ],
        ]);

        ?>
    </div>
</div>

<div>   
    <div class="col-md-2">
        <div class="list-group">
          <a href="<?php echo Url::to(['hello-crud/edit', 'id'=>$team['id']]); ?>" class="list-group-item"><i class="glyphicon glyphicon-pencil"></i> Edit Team</a>
          <a href="<?php echo Url::to(['hello-crud/delete', 'id'=>$team['id']]); ?>" class="list-group-item"><i class="glyphicon glyphicon-trash"></i> Delete Team</a>
        </div>
    </div>
    <div class="col-md-10">

        <div class="col-md-8">
            <p><b>League</b>: <?php echo $team->league['name'] ?></p>
            <p><b>Country</b>: <?php echo $team->country ?></p>
            <p><?php echo $team['description'] ?></p>

        </div>


</div>