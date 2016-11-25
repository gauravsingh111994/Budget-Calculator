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
<section><form action="chk.php" method="POST">
<input type="password" name="pass">
<br>
<input type="submit" name="sub">


</form>


</section>

</body>