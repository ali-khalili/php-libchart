<?php
require_once '../../vendor/autoload.php';

header("Content-type: image/png");

$chart = new \PHPLibChart\Views\Chart\LineChart();

#    $chart->addPoint(new \PHPLibChart\Models\Point("06-01", 0));
#    $chart->addPoint(new \PHPLibChart\Models\Point("06-02", 10));

$chart->setTitle("Sales for 2006");
$chart->render();
?>