<?php

/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 17/12/2017
 * Time: 20:56
 */
class ReportDirector
{
private $ReportBuilder;
    public function setReportBuilder (ReportBuilder $ReportBuilder){
        $this->ReportBuilder=$ReportBuilder;
    }
    public function getReport(){
        return $this->ReportBuilder->getReport();
    }
    public function createReport(){
        $this->ReportBuilder->buildReport();
        
    }
}

