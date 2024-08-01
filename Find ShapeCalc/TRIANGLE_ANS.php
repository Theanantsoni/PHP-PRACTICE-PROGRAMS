
<center>
	<h1>Area Of Triangle</h1>
<?php 
	if(isset($_POST['btnsubmit']))
	{
		$no1=$_POST['txtno1'];
		$no2=$_POST['txtno2'];
		$no3=0.5;

		$ans=$no1*$no2*$no3;
	}
?>
</center>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Triangle</title>
</head>
<center>
	<h1 style="color: orange";>AREA OF TRIANGLE</h1>
<body bgcolor="black">
	<table border="5" border="5" bordercolor="darkblue" width="30%">
		<tr>
			<th>
				<font color="red">
					You Enter The Base Value Is :
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
					You Enter The Height Value Is : 
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
					Area Of Triangle Is :
				</font>
			</th>

			<td>
				<font color="yellow">
					<?php
						echo $ans;
					?>
				</font>
			</td>
		</tr>
</body>
</center>
</html>


