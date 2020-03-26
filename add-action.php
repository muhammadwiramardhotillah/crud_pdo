<?php 
include "config.php";
include "function.php";

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];

if (empty($name) || empty($age) || empty($email)) {
	if (empty($name)) {
		/* $nameError = "Name is a required field."; */
		set_flash('nameError','Name is a required field.');
		header('location: add.php');
		exit();
	} else if (empty($age)) {
		
	} else if (empty($email)) {
		
	} else {
		
	}
}
?>