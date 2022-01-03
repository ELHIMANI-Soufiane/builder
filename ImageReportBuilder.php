<?php

/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 20/12/2017
 * Time: 21:36
 */
class ImageReportBuilder extends ReportBuilder
{
    const BORDER_WIDTH = 200;
    protected $_width;
    protected $_height;
    protected $_filePath;
    protected $_title;
    protected $_legend;
    protected $_Amount;
    protected $_max =100;
    protected $image;

    public function __construct ($pWidth, $pHeight, $pFilePath)
    {
        $this->_width = $pWidth;
        $this->_height = $pHeight;
        $this->_filePath = $pFilePath;
        $this->image = imagecreate($this->_width, $this->_height);
    }



    public function buildTitle()
    {
    
    }

    public function buildLegend()
    {

    }

    public function buildAmount()
    {

    }

    public function buildResult()
    {
        $white = imagecolorallocate($this->image, 255, 255, 255);
        imagefilledrectangle($this->image, 0, 0 , $this->_width, $this->_height, $white);

        $color = imagecolorallocate($this->image, 255, 0, 0);
        imagestring($this->image,
            1, //font size 1 à 5
            0, //position x
            0, //position y
            $this->getReport()->getTitle(),
            $color
        );
        $color = imagecolorallocate($this->image, 0, 255, 0);
        imagestring($this->image,
            3,
            0,
            80,
            $this->getReport()->getLegend(),
            $color
        );
        $color = imagecolorallocate($this->image, 0, 0, 255);
        imagestring($this->image,
            5,
            0,
            160,
            $this->getReport()->getAmount(),
            $color
        );
        imagegif($this->image, $this->_filePath);
    }
}