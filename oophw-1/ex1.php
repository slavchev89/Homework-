
<?<?php
class dog {
    private $color;
    private $breed;
    private $colorOfEyes;
    private $hairLength;
    public function toWalk(){
        return true;
    }
    public function toRun (){
        echo  'Dog is running!  ';
    }
    public function toBark (){
        echo 'Dog is barking! ';
    }
    public function toBite () {
        echo 'Dog is bitting! ';
    }
    public function toDrinkWater () {
        echo 'Dog is drinking water! ';
    }
    public function toEat () {
        echo 'Dog is eating! ';
    }
   }
  $dog = new Dog ();

       
  
  ?>


