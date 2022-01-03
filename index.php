<?php
/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 17/12/2017
 * Time: 20:49
 */
require 'Report.php';
require 'ReportBuilder.php';
require 'HTMLReportBuilder.php';
require 'ImageReportBuilder.php';
require 'ReportDirector.php';

$reportDirector = new ReportDirector();
$HTMLReportBuilder = new HTMLReportBuilder();
$reportDirector->setReportBuilder($HTMLReportBuilder);
$reportDirector->createReport();
$HTMLReport=$HTMLReportBuilder->buildResult();


$reportDirector = new ReportDirector();
$ImageReportBuilder = new ImageReportBuilder(300,300,"images/monimage.png");
$reportDirector->setReportBuilder($ImageReportBuilder);
$reportDirector->createReport();
$ImageReportBuilder->buildResult();
