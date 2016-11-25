<head>
<title>Display</title>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8"  >
<script type="text/javascript">
if(screen.width<800 )
	window.location="mobdisplay.php";
	</script>
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
<?php

	$dbhost = 'mysql.uhostfull.com';
$dbuser = 'u147573558_ga';
$pass = 'gauravsingh';
$dbh1 = mysql_connect($dbhost, $dbuser, $pass) or die('no such database'); 


mysql_select_db('u147573558_bangi') or die('no such database');
$query1 = "SELECT * FROM anmol ;";
$query2 = "SELECT * FROM gaurav ;";
$totala=0;
$totalg=0;
$fetch1=mysql_query($query1) or die("try again");
$fetch2=mysql_query($query2) or die("try again");
echo "<h1><b><u>Anmol expense</u></b></h1>";

echo "<h3>Type &nbsp &nbsp &nbsp &nbsp Amount</h3>";
while($row1=mysql_fetch_assoc($fetch1))
	
	{
		echo $row1['type'];
		echo "&nbsp &nbsp &nbsp &nbsp";
		
		echo $row1['amount'];
		echo "<br>";
		
		$totala+=$row1['amount'];
		
		
	}
	echo "<h1><b><u>Gaurav expense</u></b></h2>";

echo "<h3>Type &nbsp &nbsp &nbsp &nbsp Amount</h3>";
while($row2=mysql_fetch_assoc($fetch2))
	
	{
		echo $row2['type'];
		echo "&nbsp &nbsp &nbsp &nbsp";
		
		echo $row2['amount'];
		echo "<br>";
		
		$totalg+=$row2['amount'];
		
		
	}
	
	$total=$totala+$totalg;
	echo "<h1>Total expense is : $total</h1>";
	$div=$total/2;
	if($div>$totala)
	{
		$net=$div-$totala;
		echo "<h4>Anmol you have to pay $net <br></h4>";}
	else
	{
		$net=$totala-$div;
		echo "<h4>Anmol you will recieve $net<br></h4>";}
	if($div>$totalg)
	{
		$net=$div-$totalg;
		echo "<h4>Gaurav you have to pay $net<br></h4>";}
	else
	{
		$net=$totalg-$div;
		echo "<h4>Gaurav you will recieve $net <br></h4>";}
	
	
	
	
	

?>
</section>
</body>
