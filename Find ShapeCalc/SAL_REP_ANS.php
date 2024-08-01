
<center>
	<h1>Salary Bonus Report</h1>
<?php 
	if(isset($_POST['btnsubmit']))
	{
		$no1=$_POST['txtno1'];

		echo "The Employee Salary Is : ".$no1;		echo "<br>";

		$hra=$no1*3/100;
		echo "The HRA Amount Is : ".$hra;		echo "<br>";
		
		$da=$no1*3.6/100;
		echo "The da Amount Is : ".$da;		echo "<br>";

		$travelling=$no1*2.5/100;
		echo "The travelling Amount Is : ".$travelling;		echo "<br>";

		$bonus=$no1*6/100;
		echo "The bonus Amount Is : ".$bonus;		echo "<br>";

		$insuarance=$no1*3/100;
		echo "The insuarance Amount Is : ".$insuarance;		echo "<br>";

		$p_f=$no1*10/100;
		echo "The p_f Amount Is : ".$p_f;		echo "<br>";

		$tot_sal=$no1+$hra+$da+$travelling+$bonus;
		echo "The tot_sal Amount Is : ".$tot_sal;		echo "<br>";

		$net_sal=$tot_sal-$insuarance-$p_f;
		echo "The net_sal Amount Is : ".$net_sal;		echo "<br>";

	}
?>
</center>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Salary Report</title>
</head>
<center>
	<h1 style="color: orange";>EMPLOYEE SALARY REPORT</h1>
<body bgcolor="black">
	<table border="5" border="5" bordercolor="darkblue" width="30%">
		<tr>
			<th>
				<font color="red">
					You Enter The Employee Salary Is :   : 
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

</table><br><br>

<table border="5" border="5" bordercolor="darkblue" width="30%">
		<tr>
			<th>
				<font color="red">
					Employee Salary Is :  
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
					The HRA Amount Is :  
				</font>
			</th>

			<td>
				<font color="yellow">
					<?php
						echo $hra;
					?>
				</font>
			</td>
		</tr>

		<tr>
			<th>
				<font color="red">
					The DA Amount Is :  
				</font>
			</th>

			<td>
				<font color="yellow">
					<?php
						echo $da;
					?>
				</font>
			</td>
		</tr>

		<tr>
			<th>
				<font color="red">
					The travelling Amount Is :  
				</font>
			</th>

			<td>
				<font color="yellow">
					<?php
						echo $travelling;
					?>
				</font>
			</td>
		</tr>

		<tr>
			<th>
				<font color="red">
					The bonus Amount Is :  
				</font>
			</th>

			<td>
				<font color="yellow">
					<?php
						echo $bonus;
					?>
				</font>
			</td>
		</tr>

		<tr>
			<th>
				<font color="red">
					The insuarance Amount Is :  
				</font>
			</th>

			<td>
				<font color="yellow">
					<?php
						echo $insuarance;
					?>
				</font>
			</td>
		</tr>

		<tr>
			<th>
				<font color="red">
					The p_f Amount Is :  
				</font>
			</th>

			<td>
				<font color="yellow">
					<?php
						echo $p_f;
					?>
				</font>
			</td>
		</tr>

		<tr>
			<th>
				<font color="red">
					The total salary Is :  
				</font>
			</th>

			<td>
				<font color="yellow">
					<?php
						echo $tot_sal;
					?>
				</font>
			</td>
		</tr>

		<tr>
			<th>
				<font color="red">
					The net salary Is :  
				</font>
			</th>

			<td>
				<font color="yellow">
					<?php
						echo $net_sal;
					?>
				</font>
			</td>
		</tr>

</body>
</center>
</html>


