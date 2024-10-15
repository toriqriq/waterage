// views/sample/_data3.php
<?php

use yii\helpers\Html;

foreach ($data as $item) {
    echo '<p>' . Html::encode($item['name']) . '</p>';
}
?>