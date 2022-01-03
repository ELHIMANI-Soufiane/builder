<?php

/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 17/12/2017
 * Time: 11:01
 */
abstract class ReportBuilder
{
    public $Report;
    public function buildReport() {
        $pdo=new PDO('mysql:host=localhost;dbname=builder','root','');
        try{
            $stmt=$pdo->prepare('select * from report limit 1');
            $stmt->execute();
            $result=$stmt->fetchAll(PDO::FETCH_CLASS);
            $ReportFromDB=$result[0];
            $this->Report = new Report();
            $this->Report->setTitle($ReportFromDB->title);
            $this->Report->setLegend($ReportFromDB->legend);
            $this->Report->setAmount($ReportFromDB->amount);
            
            
        }
        catch(PDOException $e){
            echo $e->getMessage();

        }
        
    }
    public function getReport(){
        return $this->Report;
    }

    abstract public function buildTitle();
    abstract public function buildLegend();
    abstract public function buildAmount();
    abstract public function buildResult();
}

