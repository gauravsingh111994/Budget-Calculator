<head>
<title>Updation</title>
<style>
section{
	width: 100%;
	
	float: left;

	padding: 20px;
	background-color: white;

	background-size: cover;
	
}
body
{
background-color: #4D739A;
}
</style>

</head>

<body>
<?php
include 'menu.html';
?>
<section>
<?php



$dbhost = 'mysql.uhostfull.com';
$dbuser = 'u147573558_ga';
$pass = 'gauravsingh';
$dataa="u147573558_bangi";
$conn =new mysqli($dbhost,$dbuser,$pass,$dataa);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if($_POST['am']&&$_POST['at'])

{
	$t=$_POST['at'];
	$a=$_POST['am'];
$sql = "INSERT INTO anmol (type,amount)
VALUES ('$t',$a)";

if ($conn->query($sql) === TRUE) {
    echo "Anmol record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
if($_POST['gm']&&$_POST['gt'])

{
	$t=$_POST['gt'];
	$a=$_POST['gm'];
$sql = "INSERT INTO gaurav (type,amount)
VALUES ('$t',$a)";

if ($conn->query($sql) === TRUE) {
    echo "<br>Gaurav record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();

?>
</section>
</body>