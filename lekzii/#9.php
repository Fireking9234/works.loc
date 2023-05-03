<?php
class Person{
    public $name;
    public $age;


    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
    public function sayHallo() {
        return "Hi I am " . $this->name. " and I am " . $this->sayAge();
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function sayAge(){
        return $this->age;
    }
}

$myPerson = new Person("misha" , 18);
//$myPerson2 = new Person();

//$myPerson->setName("misha");
//$myPerson->setAge(18);

//echo $myPerson->sayHallo();


echo $myPerson->name;
echo $myPerson->age;
