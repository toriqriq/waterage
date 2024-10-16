// views/sample/_data1.php
<?php

use yii\helpers\Html;



foreach ($data as $item) {

    echo '<p>' . Html::encode($item['id']) . '</p>';
}
?>