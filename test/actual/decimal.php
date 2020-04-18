<?php
    require_once '../../vendor/autoload.php';

    header("Content-type: image/png");

    $chart = new \PHPLibChart\Views\Chart\VerticalBarChart();

    $dataSet = new \PHPLibChart\Models\XYDataSet();
    $dataSet->addPoint(new \PHPLibChart\Models\Point("Jan 2005", 1));
    $dataSet->addPoint(new \PHPLibChart\Models\Point("Feb 2005", 1));
    $dataSet->addPoint(new \PHPLibChart\Models\Point("March 2005", 1));
    $dataSet->addPoint(new \PHPLibChart\Models\Point("April 2005", 2.25));
    $dataSet->addPoint(new \PHPLibChart\Models\Point("May 2005", 3.14156265));
    $dataSet->addPoint(new \PHPLibChart\Models\Point("June 2005", 2.4));
    $dataSet->addPoint(new \PHPLibChart\Models\Point("July 2005", 1));
    $chart->setDataSet($dataSet);
    
    $chart->setTitle("Monthly usage for www.example.com");
    $chart->render();
?>