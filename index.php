<?php
	$object1			= new User();
	$object1->name = "John";
	$object2			= clone $object1;
	$object2->name = "Jim";

	echo "object1 name = " . $object1->name . "<br>";
	echo "object2 name = " . $object2->name;

	class User
	{
		public $name;
	}
?>