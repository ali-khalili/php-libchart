<?php
require_once '../../vendor/autoload.php';
use \PHPLibChart\Views\Color\Color;

header("Content-type: image/png");

$chart = new \PHPLibChart\Views\Chart\PieChart();

$chart->getPlot()->getPalette()->setPieColor(array(
    new Color(255, 0, 0),
    new Color(255, 255, 255)
));

$dataSet = new \PHPLibChart\Models\XYDataSet();
$dataSet->addPoint(new \PHPLibChart\Models\Point("Amanita abrupta", 80));
$dataSet->addPoint(new \PHPLibChart\Models\Point("Amanita arocheae", 75));
$dataSet->addPoint(new \PHPLibChart\Models\Point("Clitocybe dealbata", 50));
$dataSet->addPoint(new \PHPLibChart\Models\Point("Cortinarius rubellus", 70));
$dataSet->addPoint(new \PHPLibChart\Models\Point("Gyromitra esculenta", 37));
$dataSet->addPoint(new \PHPLibChart\Models\Point("Lepiota castanea", 37));
$chart->setDataSet($dataSet);

$chart->setTitle("Deadly mushrooms");
$chart->render();
?>