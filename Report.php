<?php

/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 17/12/2017
 * Time: 11:02
 */
class Report
{
    /* Produit */

    public function getTitle()
    {
        return $this->Title;
    }
    public function setTitle($Title)
    {
        $this->Title = $Title;
    }
    public function getLegend()
    {
        return $this->Legend;
    }

    public function setLegend($Legend)
    {
        $this->Legend = $Legend;
    }

    public function getAmount()
    {
        return $this->Amount;
    }
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
    }
}