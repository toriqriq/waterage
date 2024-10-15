// views/sample/index.php
<?php

use yii\helpers\Html;

$this->title = 'AJAX Example with Multiple Views';
?>

<div class="sample-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <div id="data-container">
        <!-- Data akan dimuat di sini -->
    </div>
</div>

<?php
$script = <<< JS
$(document).ready(function() {
    // Load all data on page load
    function loadAllData() {
        $.ajax({
            url: 'get-data1',
            type: 'GET',
            success: function(data1) {
                $.ajax({
                    url: 'get-data2',
                    type: 'GET',
                    success: function(data2) {
                        $.ajax({
                            url: 'get-data3',
                            type: 'GET',
                            success: function(data3) {
                                $('#data-container').empty(); // Clear existing data

                                // Display Data 1
                                $.each(data1, function(index, item) {
                                    $('#data-container').append('<p>' + item.name + '</p>');
                                });
                                // Display Data 2
                                $.each(data2, function(index, item) {
                                    $('#data-container').append('<p>' + item.name + '</p>');
                                });
                                // Display Data 3
                                $.each(data3, function(index, item) {
                                    $('#data-container').append('<p>' + item.name + '</p>');
                                });
                            },
                            error: function() {
                                $('#data-container').html('<p>Error loading Data 3.</p>');
                            }
                        });
                    },
                    error: function() {
                        $('#data-container').html('<p>Error loading Data 2.</p>');
                    }
                });
            },
            error: function() {
                $('#data-container').html('<p>Error loading Data 1.</p>');
            }
        });
    }

    loadAllData(); // Call function to load all data on page load
});
JS;
$this->registerJs($script);
?>