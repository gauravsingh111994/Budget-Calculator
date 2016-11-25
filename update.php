<head>
<title>Update</title>
<script type="text/javascript">
if(screen.width<800 )
	window.location="mobupdate.php";
	</script>
<?php
goto: 'security.php';

	
	

?>
<style>
section{
	width: 80%;
	
	float: left;
	margin-left: 10%;
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
<form action="up.php" method="POST">
<h2><b><u>Anmol expense</u></b></h2>

<h4>Type</h4>
<input type="text" name="at">

<h4>Amount</h4>
<input type="text" name="am">

<h2><b><u>Gaurav expense</u></b></h2>

<h4>Type</h4>
<input type="text" name="gt">

<h4>Amount</h4>
<input type="text" name="gm">
<br><br><br>
<input type="submit" name="sub">

</form>
</section>
</body>

