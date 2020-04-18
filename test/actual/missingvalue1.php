<?php
    require_once '../../vendor/autoload.php';

    header("Content-type: image/png");
    
    $chart = new \PHPLibChart\Views\Chart\PieChart(500, 250);
    
    $dataSet = new \PHPLibChart\Models\XYDataSet();
    $dataSet->addPoint(new \PHPLibChart\Models\Point("One (80)", 80));
    $dataSet->addPoint(new \PHPLibChart\Models\Point("Null", 0));
    $dataSet->addPoint(new \PHPLibChart\Models\Point("Two (50)", 50));
    $dataSet->addPoint(new \PHPLibChart\Models\Point("Three (70)", 70));
    $chart->setDataSet($dataSet);
    
    $chart->setTitle("User agents for www.example.com");
    $chart->render();
?>