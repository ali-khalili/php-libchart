<?php
require_once '../../vendor/autoload.php';

header("Content-type: image/png");

$chart = new \PHPLibChart\Views\Chart\PieChart(500, 250);

$dataSet = new \PHPLibChart\Models\XYDataSet();
$dataSet->addPoint(new \PHPLibChart\Models\Point("Mozilla Firefox (80)", 80));
$dataSet->addPoint(new \PHPLibChart\Models\Point("Konqueror (75)", 75));
$dataSet->addPoint(new \PHPLibChart\Models\Point("Other (50)", 50));
$chart->setDataSet($dataSet);

$chart->setTitle("User agents for www.example.com");
$chart->render();
?>