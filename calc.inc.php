<?php

class calc {

	public $num1;
	public $num2;
	public $cal;

	public function __construct($num1, $num2, $cal)
	{

		$this->num1 = $num1;
		$this->num2 = $num2;
		$this->cal = $cal;
		
	}

	public function calcMethod()
	{
		if(empty($this->num1) || empty($this->num2))	//condition for field should be not empty.
		{
			echo "Field must not be empty";
		}
		else
		{												//if both field fill execute the selected operation
		switch ($this->cal) {
			case 'add':									// code for Addition
				$result = $this->num1 + $this->num2;
				break;
			case 'sub':									// code for Subtraction
				$result = $this->num1 - $this->num2;
				break;
			case 'mul':									// code for Multiplication
				$result = $this->num1 * $this->num2;
				break;
			case 'div':									// code for Division
				$result = $this->num1 / $this->num2;
				break;
			default:
				$result = "Error:";
				break;
		}
		return $result;									// get the Result
		}
	}

}

?>