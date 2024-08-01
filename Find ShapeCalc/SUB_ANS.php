<?php

	if(isset($_POST['btnsubmit']))
	{
		$no1=$_POST['txtno1'];
		$no2=$_POST['txtno2'];

		$sub=$no1-$no2;
		echo "Both Numbers Subtraction Is : ".$sub;
	}

?>



<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Subtraction</title>
</head>
<center>
	<h1 style="color: orange";>SUBTRACTION</h1>
<body bgcolor="black">
	<table border="5" border="5" bordercolor="darkblue" width="30%">
		<tr>
			<th>
				<font color="red">
					You Enter A First Number Is :
				</font>
			</th>

			<td>
				<font color="yellow">
					<?php
						echo $no1;
					?>
				</font>
			</td>
		</tr>

		<tr>
			<th>
				<font color="red">
					You Enter A Second Number Is :
				</font>
			</th>

			<td>
				<font color="yellow">
					<?php
						echo $no2;
					?>
				</font>
			</td>
		</tr>
</table><br><br>

<table border="5" border="5" bordercolor="darkblue" width="30%">
		<tr>
			<th>
				<font color="red">
					Both Numbers Subtraction Is : 
				</font>
			</th>

			<td>
				<font color="yellow">
					<?php
						echo $sub;
					?>
				</font>
			</td>
		</tr>
</body>
</center>
</html>


