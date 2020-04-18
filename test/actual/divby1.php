<?php
require_once '../../vendor/autoload.php';

header("Content-type: image/png");

$chart = new \PHPLibChart\Views\Chart\VerticalBarChart(500, 250);

$dataSet = new \PHPLibChart\Models\XYDataSet();
$dataSet->addPoint(new \PHPLibChart\Models\Point("Mozilla Firefox (0)", 0));
$dataSet->addPoint(new \PHPLibChart\Models\Point("Konqueror (0)", 0));
$dataSet->addPoint(new \PHPLibChart\Models\Point("Other (0)", 0));
$chart->setDataSet($dataSet);

$chart->setTitle("User agents for www.example.com");
$chart->render();
?>