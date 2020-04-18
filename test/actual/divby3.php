<?php
require_once '../../vendor/autoload.php';

header("Content-type: image/png");

$chart = new \PHPLibChart\Views\Chart\LineChart();

$dataSet = new \PHPLibChart\Models\XYDataSet();
$dataSet->addPoint(new \PHPLibChart\Models\Point("06-01", 0));
$dataSet->addPoint(new \PHPLibChart\Models\Point("06-02", 0));
$chart->setDataSet($dataSet);

$chart->setTitle("Sales for 2006");
$chart->render();
?>