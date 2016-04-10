<?php

class Human{
        public $gender;
        private $weight;
        private $myDog ;
        public function isMyDog(){
        $this->myDog = new Dog ($this);
        }
        public function toWalk () {
            echo 'Human is walking! ';
            }
        public function getGender () {
            
           return $this->gender;
        }
        public function toEat () {
        echo 'Human is eating! ';
        
    }
    public function toRun (){
        echo  'Dog is running!  ';
    }
    public function toSpeak () {
        echo 'Human is speaking! ';
    }
    
    public function toMeetSomeone (){
        echo 'Human is meeting someone! ';
    }
   }        
   
 $boy = new Human();
 $girl = new Human();
 $boy = $girl->toMeetSomeone();
   ?>