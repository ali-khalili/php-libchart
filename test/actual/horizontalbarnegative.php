<?php
    require_once '../../vendor/autoload.php';

    header("Content-type: image/png");

    $chart = new \PHPLibChart\Views\Chart\HorizontalBarChart();

    $dataSet = new \PHPLibChart\Models\XYDataSet();
    $dataSet->addPoint(new \PHPLibChart\Models\Point("2000", 780));
    $dataSet->addPoint(new \PHPLibChart\Models\Point("2001", 200));
    $dataSet->addPoint(new \PHPLibChart\Models\Point("2002", -100));
    $dataSet->addPoint(new \PHPLibChart\Models\Point("2003", 0));
    $dataSet->addPoint(new \PHPLibChart\Models\Point("2004", -550));
    $dataSet->addPoint(new \PHPLibChart\Models\Point("2005", -300));
    $chart->setDataSet($dataSet);
    
    $chart->setTitle("Net migration");
    $chart->render();
?>