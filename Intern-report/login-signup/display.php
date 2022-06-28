<!DOCTYPE html>
<?php
$First_Name = $_POST['fname'];
$Last_Name = $_POST['lname'];
$EMAIL = $_POST['email'];
$BROWSER = $_POST['browser'];
$Course_Name = $_POST['Coursename'];
$School = $_POST['School_college'];
$Self_intro = $_POST['Selfintro'];
$PSW = $_POST['psw'];

?>
<body>
<h1>~User~</h1>
<h2>USER REGISTRARION FROM</h2>
<table border="1" width="25%">
<tr>
	<td>First Name: </td>
	<th><?php echo $First_Name; ?> </th>
</tr>
<tr>
	<td>Last Name: </td>
	<th><?php echo $Last_Name; ?> </th>
</tr>
<tr>
	<td>Email: </td>
	<th><?php echo $EMAIL; ?> </th>
</tr>
<tr>
	<td>Browser: </td>
	<th><?php echo $BROWSER; ?> </th>
</tr>
<tr>
	<td>Course Name: </td>
	<th><?php echo $Course_Name; ?> </th>
</tr>
<tr>
	<td>School: </td>
	<th><?php echo $School; ?> </th>
</tr>
<tr>
	<td>Self intro: </td>
	<th><?php echo $Self_intro; ?> </th>
</tr>
<tr>
	<td>Pass: </td>
	<th><?php echo $PSW; ?> </th>
</tr>
</table>
<br><br>
<a href="index.php"> Insert New Records</a>

</body>
<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "legoom_1";
	
	$conn = new mysqli ($host, $user, $pass, $db);
	
	if ($conn->connect_error)
	{
		die ("connection failed : " . $conn->connect_error);
	}
	else
	{
		$queryInsert = "insert into user(FName,LName, Email, Educational_level,course_name,college_name,Intro_self,U_Pass)
		values 
		('".$First_Name."','".$Last_Name."','".$EMAIL."','".$BROWSER."','".$Course_Name."','".$School."','".$Self_intro."','".$PSW."')";
	if ($conn->query($queryInsert) === TRUE)
	{
		echo "<p style='color:blue;'>Success insert Intern record</p>";
	} else
	{
		echo "<p style='color:red;'>Error: Invalid query" .$conn->error. "</p>";
	}
}	
$conn->close();
?>

</html>