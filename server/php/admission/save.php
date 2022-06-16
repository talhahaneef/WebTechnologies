<html>
<head>
<title>Student Admission System</title>

</head>

<body bgcolor="#DEDEDE">
<center>

<h1>Student Admission System</h1>
<?php


	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$marks=$_POST['marks'];
	$gender= $_POST['gender'];
	$class=$_POST['class'];
	$pass= implode(',', $_POST['pass']); 
	$info=$_POST['info'];

	$conn = mysqli_connect('localhost', 'root', '', 'sas');
	if (!$conn)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysqli_query($conn, "INSERT INTO admissions(rollno,name,marks,gender,class,pass,info) 
		VALUES ($rollno,'$name',$marks,'$gender','$class','$pass','$info')")
	or die(mysql_error());
	mysqli_close($conn);
	echo "<br/><b>Your admission has been saved successfully.</b><br/>";

	
	
?>