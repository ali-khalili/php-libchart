<?php
require_once '../../vendor/autoload.php';

header("Content-type: image/png");

$chart = new \PHPLibChart\Views\Chart\VerticalBarChart(500, 250);

$dataSet = new \PHPLibChart\Models\XYDataSet();
$dataSet->addPoint(new \PHPLibChart\Models\Point("Jan 2005", 273));
$dataSet->addPoint(new \PHPLibChart\Models\Point("Feb 2005", 321));
$dataSet->addPoint(new \PHPLibChart\Models\Point("March 2005", 442));
$dataSet->addPoint(new \PHPLibChart\Models\Point("April 2005", 711));
$chart->setDataSet($dataSet);

$chart->setTitle("Monthly usage for www.example.com");
$chart->render();
?>