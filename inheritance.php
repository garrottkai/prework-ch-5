<?php
	$object				= new Subscriber;
	$object->name		= "Fred";
	$object->password	= "pword";
	$object->phone		= "123 456 7890";
	$object->email		= "fred@fredfred.com";
	$object->display();

	class User
	{
		public $name, $password;

		function save_user()
		{
		echo 'Save User code here';
		}
	}

class Subscriber extends User
{
	public $phone, $email;

	function display()
	{
	echo "Name: " 	. $this->name		. "<br>";
	echo "Pass: " 	. $this->password	. "<br>";
	echo "Phone: "	. $this->phone 	. "<br>";
	echo "Email: "	. $this->email;

	}
}
?>