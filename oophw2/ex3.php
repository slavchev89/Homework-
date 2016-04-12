<?php

class Vehicle
{
    public $steeringWheel;
    public $brake;
    public $seat;
    public $engine;
    public function fly()
    {return 'fly';
}
 public function turn()
    {return 'turn';}
    
    public function sailing()
    {return 'sailing';}
    
     public function depart()
    {return 'depart';}
     public function stop()
    {return 'stop';}
}
$Vehicle = new Vehicle();
echo $Vehicle -> fly();
echo "<br  />";

echo $Vehicle -> turn();
echo "<br  />";

echo $Vehicle -> sailing();
echo "<br  />";

echo $Vehicle -> depart();
echo "<br  />";

echo $Vehicle -> stop();
echo "<br  />";
?>