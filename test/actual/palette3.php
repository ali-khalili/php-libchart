<?php
require_once '../../vendor/autoload.php';

header("Content-type: image/png");

$chart = new \PHPLibChart\Views\Chart\VerticalBarChart(500, 250);

$chart->getConfig()->setUseMultipleColor(true);
$chart->getPlot()->getPalette()->setBarColor(array(
    new \PHPLibChart\Views\Color\Color(255, 0, 0),
    new \PHPLibChart\Views\Color\Color(44, 70, 181),
    new \PHPLibChart\Views\Color\Color(126, 209, 59),
    new \PHPLibChart\Views\Color\Color(247, 150, 71)
));

$dataSet = new \PHPLibChart\Models\XYDataSet();
$dataSet->addPoint(new \PHPLibChart\Models\Point("Jan 2005", 273));
$dataSet->addPoint(new \PHPLibChart\Models\Point("Feb 2005", 321));
$dataSet->addPoint(new \PHPLibChart\Models\Point("Mar 2005", 442));
$dataSet->addPoint(new \PHPLibChart\Models\Point("Apr 2005", 711));
$chart->setDataSet($dataSet);

$chart->setTitle("Monthly usage for www.example.com");
$chart->render();
?>
