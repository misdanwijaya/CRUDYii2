<?php

use yii\bootstrap\Alert;
$this->title = 'Demo Widget - Alert';

?>

<h1>Demo Widget</h1>

<p>Berikut ini contoh penggunaan <i>widget</i> Alert di Yii2:</p>

<?php

echo Alert::widget([
    'options' => [
        'class' => 'alert-info',
    ],
    'body' => '[INFO] Ini adalah alert...',
]);

echo Alert::widget([
    'options' => [
        'class' => 'alert-warning',
    ],
    'body' => '[WARNING] Ini adalah alert...',
]);


echo Alert::widget([
    'options' => [
        'class' => 'alert-danger',
    ],
    'body' => '[DANGER] Ini adalah alert...',
]);


echo Alert::widget([
    'options' => [
        'class' => 'alert-success',
    ],
    'body' => '[SUCCESS] Ini adalah alert...',
]);


?>