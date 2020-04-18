<?php
require_once '../../vendor/autoload.php';

class ThousandLabelGenerator
{
    function generateLabel($value)
    {
        return ((int)($value / 1000)) . "k";
    }
}

header("Content-type: image/png");

$chart = new \PHPLibChart\Views\Chart\LineChart(500, 250);

$dataSet = new \PHPLibChart\Models\XYDataSet();
$dataSet->addPoint(new \PHPLibChart\Models\Point("Jan 2005", 27300));
$dataSet->addPoint(new \PHPLibChart\Models\Point("Feb 2005", 32100));
$dataSet->addPoint(new \PHPLibChart\Models\Point("March 2005", 44200));
$dataSet->addPoint(new \PHPLibChart\Models\Point("April 2005", 71100));
$chart->setDataSet($dataSet);

$chart->setTitle("Monthly usage for www.example.com");
$chart->getPlot()->setLabelGenerator(new ThousandLabelGenerator());
$chart->render();
?>