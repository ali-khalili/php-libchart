<?php
    require_once '../../vendor/autoload.php';

    header("Content-type: image/png");
    
    $chart = new \PHPLibChart\Views\Chart\PieChart(500, 250);

    $dataSet = new \PHPLibChart\Models\XYDataSet();
    $dataSet->addPoint(new \PHPLibChart\Models\Point("a (4872)", 4872));
    $dataSet->addPoint(new \PHPLibChart\Models\Point("b (4774)", 4774));
    $dataSet->addPoint(new \PHPLibChart\Models\Point("c (288)", 288));
    $dataSet->addPoint(new \PHPLibChart\Models\Point("d (18)", 18));
    $dataSet->addPoint(new \PHPLibChart\Models\Point("e (9)", 9));
    $dataSet->addPoint(new \PHPLibChart\Models\Point("f (0)", 0));
    $dataSet->addPoint(new \PHPLibChart\Models\Point("g (0)", 0));
    
    $chart->setDataSet($dataSet);
    
    $chart->setTitle("Sales for 2006");
    $chart->render();
?>