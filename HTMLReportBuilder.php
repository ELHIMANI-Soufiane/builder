<?php

/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 17/12/2017
 * Time: 20:19
 */
class HTMLReportBuilder extends ReportBuilder
{
    public function buildTitle()
    {
        $this->Report->setTitle('<B>' . $this->Report->getTitle() . '</B>');
    }
    public function buildLegend()
    {
        $this->Report->setLegend('<B>' . $this->Report->getLegend() . '</B>');
    }
    public function buildAmount()
    {
        $this->Report->setAmount('<B>' . $this->Report->getAmount() . '</B>');
    }
    public function buildResult(){
        echo '<tr><td>'.$this->Report->getTitle().'</td><td>'.$this->Report->getLegend().'</td>
        <td>'.$this->Report->getAmount().'</td></tr>';
    }
}

