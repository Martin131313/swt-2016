<?php  

class Student {
	// properties - особини
	public $age;
	public $hight;
	public $gender;
	public $weight;
	public $name;
	public $address;
	public $studentId;

	// methods - акции
	// metodi funkcija sto se naogja vo klasa
	public function learn(){
		echo 'The student '.$this->name.' is learning';
	}

	public function sleep(){
		echo 'The student is sleeping';
	}

	public function practice(){
		echo 'The student is practicing';
	}

	public function takingExam(){
		echo 'The student is taking exam';
	}

	public function takeLecture(){
		echo 'The student is taking lecture';
	}
}
// $studentOne e objektot koj e kreiran od klasata Student
// $studentOne = new Student;
// $studentOne->age = 22;
// $studentOne->hight = 180;
// $studentOne->gender = 'm';
// $studentOne->weight = 78;
// $studentOne->name = 'Martin';
// $studentOne->address = 'Pushkinova br 17/2-14';
// $studentOne->studentId = 'sa4f68safa4f67';


// $studentTwo = new Student;
// $studentTwo->age = 25;
// $studentTwo->hight = 190;
// $studentTwo->gender = 'm';
// $studentTwo->weight = 90;
// $studentTwo->name = 'Martin';
// $studentTwo->address = 'Pushkinova bb';
// $studentTwo->studentId = 'dfuisager23g4';


// $studentOne->learn();
// $studentOne->slep();
// $studentOne->practice();
// $studentOne->takingExam();
// $studentOne->takingLecture();


// print_r($studentOne);
// echo '<br/>';	
// print_r($studentTwo);



$student = new Student;
$student->name = 'Martin';
$student->learn();

$studentThree = new Student;
$studentThree->name = 'Pero Perovski';
$studentThree->learn();

echo '<br/></br>';



class Calculator{
	private $A;
	private $B;

	// construct se povikuva koga se kreira objektot
	// destruct se povikuva koga se brise objektot

	public function __construct($inputA, $inputB){
		$this->setA($inputA);
		$this->setB($inputB);

	}

	public function setA($input){
		if(is_numeric($input)){
			$this->A = $input;
		} else {
			echo ' Enter number for A';
		}
	}

	public function setB($input){
		if(is_numeric($input)){
			$this->B = $input;
		} else {
			echo 'Enter number for B';
		}
	}

	public function add(){
		echo $this->A + $this->B;
	}
	public function substract(){
		echo $this->A - $this->B;
	}
	public function multyply(){
		echo $this->A * $this->B;
	}
	public function devide(){
		echo $this->A / $this->B;
	}

	public function __destruct(){
		echo 'Calling the D.E.S.T.R.U.C.T.O.R. !!!';
	}
}

$K = new Calculator(4, 19);
// $K->A = 10; ova ne vazi so private
// $K->B = 'asd';
// $K->setA(3); ova ne treba so construct
// $K->setB('test');
echo '<br/>';
$K->multyply();
echo '<br/>';
unset($c);
echo '<br/>';
echo 'Kraj!';
echo '<br/>';



// treba da napiseme klasa (class) za toa Bojan se ke ni dade (implementacija sto...) :) FAQ (: 



?>