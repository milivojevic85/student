<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Student</title>
</head>
<body>
<?php 

class Student
{
	// adding class attributes or properties
	public $first_name;
	public $last_name;
	public $address;
	
	// initializing our properties, the constructor method is automatically fired upon object instantiation
	public function __construct($first_name, $last_name, $address) {
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->address = $address;	
	}
	// a class method
	public function greeting() {
		return "Hello ".$this->first_name."<br>";
	}
	// a class method
	public function getAddress() {
		return $this->address."<br>";
	}
}

// object instantiation 
$student1 = new Student("John", "Doe", "3235 Woodland Park St"); 
//arguments are values assigned to the properties

// accessing the class methods
echo $student1->greeting(); // Hello John
echo $student1->getAddress(); // 3235 Woodland Park St


?>
</body>
</html>


