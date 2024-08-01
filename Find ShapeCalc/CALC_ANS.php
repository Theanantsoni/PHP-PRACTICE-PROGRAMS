<?php
	$no1=$_POST['txtv1'];
	$no2=$_POST['txtv2'];
// -------------------------------------Coding Of Addition Start----------------------------------------
	if(isset($_POST['btnadd'])) 
	{

		$addans=$no1+$no2;
?>

		<table border="5" border="5" width="50%" color="red">
			<font>
				<tr>
					<td>
						The Addition IS : 
					</td>
					<th>
						<?php
							echo $addans;
						?>
					</th>
				</tr>
			</font>
		</table>
<?php		
	}
?>




<?php
	$no1=$_POST['txtv1'];
	$no2=$_POST['txtv2'];
// -------------------------------------Coding Of Subtraction Start----------------------------------------
	if(isset($_POST['btnsub'])) 
	{

		$subans=$no2-$no1;
?>

		<table border="5" border="5" width="50%" color="red">
			<font>
				<tr>
					<td>
						The Subtraction Is : 
					</td>
					<th>
						<?php
							echo $subans;
						?>
					</th>
				</tr>
			</font>
		</table>
<?php		
	}
?>




<?php
	$no1=$_POST['txtv1'];
	$no2=$_POST['txtv2'];
// -------------------------------------Coding Of Multiplication Start----------------------------------------
	if(isset($_POST['btnmul'])) 
	{

		$mulans=$no2*$no1;
?>

		<table border="5" border="5" width="50%" color="red">
			<font>
				<tr>
					<td>
						The Multiplication Is : 
					</td>
					<th>
						<?php
							echo $mulans;
						?>
					</th>
				</tr>
			</font>
		</table>
<?php		
	}
?>



<?php
	$no1=$_POST['txtv1'];
	$no2=$_POST['txtv2'];
// -------------------------------------Coding Of Division Start----------------------------------------
	if(isset($_POST['btndiv'])) 
	{

		$divans=$no2/$no1;
?>

		<table border="5" border="5" width="50%" color="red">
			<font>
				<tr>
					<td>
						The Division Is : 
					</td>
					<th>
						<?php
							echo $divans;
						?>
					</th>
				</tr>
			</font>
		</table>
<?php		
	}
?>


		




		