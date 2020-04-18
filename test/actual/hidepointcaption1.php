<?php
require_once '../../vendor/autoload.php';

header("Content-type: image/png");

$chart = new \PHPLibChart\Views\Chart\PieChart();

$chart->getConfig()->setShowPointCaption(false);

$dataSet = new \PHPLibChart\Models\XYDataSet();
$dataSet->addPoint(new \PHPLibChart\Models\Point("Some part", 20));
$dataSet->addPoint(new \PHPLibChart\Models\Point("Another part", 35));
$dataSet->addPoint(new \PHPLibChart\Models\Point("Biggest part", 70));
$chart->setDataSet($dataSet);

$chart->setTitle("This is a pie");
$chart->render();
?>