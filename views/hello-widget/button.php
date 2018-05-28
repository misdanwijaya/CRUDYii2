<?php

use yii\bootstrap\Button;
use yii\bootstrap\ButtonGroup;
use yii\bootstrap\ButtonDropdown;

$this->title = 'Demo Widget - Button';

?>

<h1>Demo Widget</h1>

<p>Berikut ini contoh penggunaan <i>widget</i> Button di Yii2:</p>

<?php

echo Button::widget([
    'label' => 'Button large',
    'options' => ['class' => 'btn-lg btn-default', 'style' => 'margin-right:10px;'],
]);

echo Button::widget([
    'label' => 'Button large',
    'options' => ['class' => 'btn-lg btn-info', 'style' => 'margin-right:10px;'],
]);

echo Button::widget([
    'label' => 'Button large',
    'options' => ['class' => 'btn-lg btn-success', 'style' => 'margin-right:10px;'],
]);

echo Button::widget([
    'label' => 'Button large',
    'options' => ['class' => 'btn-lg btn-warning', 'style' => 'margin-right:10px;'],
]);

echo Button::widget([
    'label' => 'Button large',
    'options' => ['class' => 'btn-lg btn-danger', 'style' => 'margin-right:10px;'],
]);

?>

<br/> 
<br/> 

<?php

echo Button::widget([
    'label' => 'Button medium',
    'options' => ['class' => 'btn-md btn-default', 'style' => 'margin-right:10px;'],
]);

echo Button::widget([
    'label' => 'Button medium',
    'options' => ['class' => 'btn-md btn-info', 'style' => 'margin-right:10px;'],
]);

echo Button::widget([
    'label' => 'Button medium',
    'options' => ['class' => 'btn-md btn-success', 'style' => 'margin-right:10px;'],
]);

echo Button::widget([
    'label' => 'Button medium',
    'options' => ['class' => 'btn-md btn-warning', 'style' => 'margin-right:10px;'],
]);

echo Button::widget([
    'label' => 'Button medium',
    'options' => ['class' => 'btn-md btn-danger', 'style' => 'margin-right:10px;'],
]);

?>

<br/> 
<br/> 

<?php

echo Button::widget([
    'label' => 'Button small',
    'options' => ['class' => 'btn-sm btn-default', 'style' => 'margin-right:10px;'],
]);

echo Button::widget([
    'label' => 'Button small',
    'options' => ['class' => 'btn-sm btn-info', 'style' => 'margin-right:10px;'],
]);

echo Button::widget([
    'label' => 'Button small',
    'options' => ['class' => 'btn-sm btn-success', 'style' => 'margin-right:10px;'],
]);

echo Button::widget([
    'label' => 'Button small',
    'options' => ['class' => 'btn-sm btn-warning', 'style' => 'margin-right:10px;'],
]);

echo Button::widget([
    'label' => 'Button small',
    'options' => ['class' => 'btn-sm btn-danger', 'style' => 'margin-right:10px;'],
]);

?>

<br/> 
<br/> 

<?php

echo Button::widget([
    'label' => 'Button extra small',
    'options' => ['class' => 'btn-xs btn-default', 'style' => 'margin-right:10px;'],
]);

echo Button::widget([
    'label' => 'Button extra small',
    'options' => ['class' => 'btn-xs btn-info', 'style' => 'margin-right:10px;'],
]);

echo Button::widget([
    'label' => 'Button extra small',
    'options' => ['class' => 'btn-xs btn-success', 'style' => 'margin-right:10px;'],
]);

echo Button::widget([
    'label' => 'Button extra small',
    'options' => ['class' => 'btn-xs btn-warning', 'style' => 'margin-right:10px;'],
]);

echo Button::widget([
    'label' => 'Button extra small',
    'options' => ['class' => 'btn-xs btn-danger', 'style' => 'margin-right:10px;'],
]);

?>

<br/>
<br/>

<p>Berikut ini contoh penggunaan <i>widget</i> ButtonDropdown di Yii2:</p>

<?php

echo ButtonDropdown::widget([
    'label' => 'Button Dropdown',
    'options' => ['class'=>'btn-default', 'style'=>'margin-right:10px;'],
    'dropdown' => [
        'items' => [
            ['label' => 'Lorem', 'url' => '#'],
            ['label' => 'Ipsum', 'url' => '#'],
        ],
    ],
]);

echo ButtonDropdown::widget([
    'label' => 'Button Dropdown',
    'options' => ['class'=>'btn-info', 'style'=>'margin-right:10px;'],
    'dropdown' => [
        'items' => [
            ['label' => 'Lorem', 'url' => '#'],
            ['label' => 'Ipsum', 'url' => '#'],
        ],
    ],
]);

echo ButtonDropdown::widget([
    'label' => 'Button Dropdown',
    'options' => ['class'=>'btn-success', 'style'=>'margin-right:10px;'],
    'dropdown' => [
        'items' => [
            ['label' => 'Lorem', 'url' => '#'],
            ['label' => 'Ipsum', 'url' => '#'],
        ],
    ],
]);

echo ButtonDropdown::widget([
    'label' => 'Button Dropdown',
    'options' => ['class'=>'btn-warning', 'style'=>'margin-right:10px;'],
    'dropdown' => [
        'items' => [
            ['label' => 'Lorem', 'url' => '#'],
            ['label' => 'Ipsum', 'url' => '#'],
        ],
    ],
]);

echo ButtonDropdown::widget([
    'label' => 'Button Dropdown',
    'options' => ['class'=>'btn-danger', 'style'=>'margin-right:10px;'],
    'dropdown' => [
        'items' => [
            ['label' => 'Lorem', 'url' => '#'],
            ['label' => 'Ipsum', 'url' => '#'],
        ],
    ],
]);

?>

<br/>
<br/>

<p>Berikut ini contoh penggunaan <i>widget</i> ButtonGroups di Yii2:</p>

<?php

echo ButtonGroup::widget([
    'buttons' => [
        ['label' => 'Gunung Fuji', 'options' => ['class'=>'btn-info']],
        ['label' => 'Gunung Kinabalu', 'options' => ['class'=>'btn-default']],
        ['label' => 'Bukit Jayawijaya', 'options' => ['class'=>'btn-success']],
        ['label' => 'Tebing Keraton', 'options' => ['class'=>'btn-warning']],
        ['label' => 'Puncak Himalaya', 'options' => ['class'=>'btn-danger']],
    ]
]);


?>