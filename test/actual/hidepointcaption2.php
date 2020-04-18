<?php
require_once '../../vendor/autoload.php';

header("Content-type: image/png");

$chart = new \PHPLibChart\Views\Chart\HorizontalBarChart(500, 250);

$chart->getConfig()->setShowPointCaption(false);

$dataSet = new \PHPLibChart\Models\XYDataSet();
$dataSet->addPoint(new \PHPLibChart\Models\Point("Jan 2005", 273));
$dataSet->addPoint(new \PHPLibChart\Models\Point("Feb 2005", 321));
$dataSet->addPoint(new \PHPLibChart\Models\Point("Mar 2005", 442));
$dataSet->addPoint(new \PHPLibChart\Models\Point("Apr 2005", 711));
$chart->setDataSet($dataSet);

$chart->setTitle("Monthly usage for www.example.com");
$chart->render();
?>
