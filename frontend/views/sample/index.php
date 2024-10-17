<?php

use yii\helpers\Html;

$this->title = 'Selamat datang di situs Linovelia';
?>

<div class="sample-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <div id="data-container" style="display: flex; justify-content: space-between;">
        <div id="data1" style="flex: 1; padding: 10px; border: 1px solid #ccc; background-color: #f8d7da;">
            <h2>Data 1</h2>
            <!-- Data 1 akan dimuat di sini -->
        </div>
        <div id="data2" style="flex: 1; padding: 10px; border: 1px solid #ccc; background-color: #d1ecf1;">
            <h2>Data 2</h2>
            <!-- Data 2 akan dimuat di sini -->
        </div>
        <div id="data3" style="flex: 1; padding: 10px; border: 1px solid #ccc; background-color: #d4edda;">
            <h2>Data 3</h2>
            <!-- Data 3 akan dimuat di sini -->
        </div>
    </div>
</div>

<?php
$script = <<< JS
$(document).ready(function() {
    function loadAllData() {
        $.ajax({
            url: 'get-data1',
            type: 'GET',
            success: function(data1) {
                $('#data1').empty(); // Clear existing data
                $.each(data1, function(index, item) {
                    $('#data1').append('<p>' + '<b>'+item.judul+'</b>'+'<br>'+item.sinopsis+'<br>'+'<p>'); // Menampilkan judul dari data1
                });
            },
            error: function() {
                $('#data1').html('<p>Error loading Data 1.</p>');
            }
        });

        $.ajax({
            url: 'get-data2',
            type: 'GET',
            success: function(data2) {
                $('#data2').empty(); // Clear existing data
                $.each(data2, function(index, item) {
                    $('#data2').append('<p>' + item.name + '</p>'); // Menampilkan name dari data2
                });
            },
            error: function() {
                $('#data2').html('<p>Error loading Data 2.</p>');
            }
        });

        $.ajax({
            url: 'get-data3',
            type: 'GET',
            success: function(data3) {
                $('#data3').empty(); // Clear existing data
                $.each(data3, function(index, item) {
                    $('#data3').append('<p>' + item.name + '</p>'); // Menampilkan name dari data3
                });
            },
            error: function() {
                $('#data3').html('<p>Error loading Data 3.</p>');
            }
        });
    }

    loadAllData(); // Memanggil fungsi untuk memuat semua data saat halaman dimuat
});
JS;
$this->registerJs($script);
?>