<html>
<head>
	<title>CALCULATOR</title>
</head>
<body bgcolor="skyblue">
	<center>
		<h1 style="color: red;">-----: CALCULATOR :-----</h1>
			<font size="15" color="blue">
				<form action="CALC_ANS.php" method="POST">
					Enter A First Number :
					<input type="text" name="txtv1" size="25" placeholder="Enter A First Number" style="background-color: white; border: none; padding: 15px 30px; margin: 8px 4px; cursor: space; Border-radius:10px; Font-size:15px";><br><br>
					Enter A Second Number :
					<input type="text" name="txtv2" size="25" placeholder="Enter A Second Number" style="background-color: white; border: none; padding: 15px 30px; margin: 8px 4px; cursor: space; Border-radius:10px; Font-size:15px";><br><br>

					<input type="submit" name="btnadd" value="addition">
					<input type="submit" name="btnsub" value="subtraction">
					<input type="submit" name="btnmul" value="multiplication">
					<input type="submit" name="btndiv" value="division">

				</form>
			</font>
	</center>
</body>
</html>



<?php
	/*
	if(isset($_POST['btnadd'])) 
	{
		//header("location: addition.php");

		echo '<script type="text/javascript">
		window.location="addition.php"
		</script>';	
	}

	if(isset($_POST['btnsub']))
	{
		header("location: SUB_ANS.php");
	}*/
?>
