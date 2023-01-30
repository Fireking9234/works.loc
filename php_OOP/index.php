<?php 
class Person{
	public $name;
	public $age;

	public function sayHello(){
		return 'Привет меня завут' . $this->name . 'и мне' . $this->sayAge();
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

$myPerson = new Person;
$myPerson2 = new Person;

$myPerson->setName('Михаил');
$myPerson->setAge(18);
$myPerson2->setName('Кирил');
$myPerson2->setAge(33);

echo $myPerson->sayHello();
echo $myPerson2->sayHello();

 ?>