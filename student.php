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
	public $first_name;
	public $last_name;
	public $address;
	public function __construct($first_name, $last_name, $address) {
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->address = $address;	
	}
	public function greeting() {
		return "Hello ".$this->first_name."<br>";
	}
	public function getAddress() {
		return $this->address."<br>";
	}
}

$student1 = new Student("John", "Doe", "3235 Woodland Park St");
echo $student1->greeting();
echo $student1->getAddress();


?>
</body>
</html>


