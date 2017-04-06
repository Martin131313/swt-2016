<?php 

class Student {
	public static $ime;

	public static function Teach(){
		echo 'Trying to teach PHP to '.self::$ime; //.self e zamena za $this a ( :: ) - ova e scope operator zamena na strelkata ( -> ) 
	}
}

Student::$ime = 'Martin';
Student::Teach();



 ?>