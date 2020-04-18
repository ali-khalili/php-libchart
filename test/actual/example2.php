<?php
require_once '../../vendor/autoload.php';

header("Content-type: image/png");

$chart = new \PHPLibChart\Views\Chart\HorizontalBarChart(500, 170);

$dataSet = new \PHPLibChart\Models\XYDataSet();
$dataSet->addPoint(new \PHPLibChart\Models\Point("/wiki/Instant_messenger", 50));
$dataSet->addPoint(new \PHPLibChart\Models\Point("/wiki/Web_Browser", 83));
$dataSet->addPoint(new \PHPLibChart\Models\Point("/wiki/World_Wide_Web", 142));
$chart->setDataSet($dataSet);

$chart->getPlot()->setGraphPadding(new \PHPLibChart\Views\Primitive\Padding(5, 30, 20, 140));
$chart->setTitle("Most visited pages for www.example.com");
$chart->render();
?>