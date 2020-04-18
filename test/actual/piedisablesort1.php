<?php
require_once '../../vendor/autoload.php';

header("Content-type: image/png");

$chart = new \PHPLibChart\Views\Chart\PieChart(500, 250);

$chart->getConfig()->setSortDataPoint(false);

$dataSet = new \PHPLibChart\Models\XYDataSet();
$dataSet->addPoint(new \PHPLibChart\Models\Point("Item 1 (20)", 20));
$dataSet->addPoint(new \PHPLibChart\Models\Point("Item 2 (50)", 50));
$dataSet->addPoint(new \PHPLibChart\Models\Point("Item 3 (30)", 30));
$dataSet->addPoint(new \PHPLibChart\Models\Point("Item 4 (70)", 70));
$chart->setDataSet($dataSet);

$chart->setTitle("This example preserves item order");
$chart->render();
?>