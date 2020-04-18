<?php
require_once '../../vendor/autoload.php';

header("Content-type: image/png");

$chart = new \PHPLibChart\Views\Chart\VerticalBarChart(500, 250);
$dataSet = new \PHPLibChart\Models\XYDataSet();
$chart->setDataSet($dataSet);

$chart->setTitle("User agents for www.example.com");
$chart->render();
?>