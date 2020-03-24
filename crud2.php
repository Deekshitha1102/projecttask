<html>
<head>
<h1><u><center>INFORMATION</center></u></h1>
</head>
<body>
<?php
	$dbh=mysqli_connect('localhost','root','','deekshitha');

	if(!$dbh)
	{
		die('Could not Connect My Sql:' .mysqli_error());
	}

	if(isset($_POST['Delete']))
	{
		$Dname=$_POST['Dname'];
		mysqli_query($dbh,"DELETE FROM deekshitha WHERE id='$Dname'")or die("no match found");
		echo"<h3>Record Deleted Successfully!</h3>";
	}
	if(isset($_POST['update']))
	{
		$Uid=$_POST['Uid'];
		$name=$_POST['name'];
  		$dob=$_POST['dob'];
  		$phone=$_POST['phone'];
  		$address=$_POST['address'];
  		$email=$_POST['email'];
  		$pcourse=$_POST['pcourse'];
  		$pinst=$_POST['pinst'];
  		$ppass=$_POST['ppass'];
  		$pper=$_POST['pper'];
  		$ucourse=$_POST['ucourse'];
  		$uinst=$_POST['uinst'];
  		$upass=$_POST['upass'];
  		$uper=$_POST['uper'];
  		$ccourse=$_POST['ccourse'];
  		$cinst=$_POST['cinst'];
  		$cpass=$_POST['cpass'];
  		$cper=$_POST['cper'];
  		$scourse=$_POST['scourse'];
  		$sinst=$_POST['sinst'];
  		$spass=$_POST['spass'];
  		$sper=$_POST['sper'];
  		$ptitle=$_POST['ptitle'];
  		$pdes=$_POST['pdes'];
  		$pduration=$_POST['pduration'];
  		$title=$_POST['title'];
  		$des=$_POST['des'];
  		$duration=$_POST['duration'];
  		$hobbies=$_POST['hobbies'];
  		$desception=$_POST['desception'];
  
		mysqli_query($dbh,"UPDATE deekshitha SET name='$name',dob='$dob',phone='$phone',address='$address',email='$email',pcourse='$pcourse',pinst='$pinst',ppass='$ppass',pper='$pper',ucourse='$ucourse',uinst='$uinst',upass='$upass',uper='$uper',ccourse='$ccourse',cinst='$cinst',cpass='$cpass',cper='$cper',scourse='$scourse',sinst='$sinst',spass='$spass',sper='$sper',ptitle='$ptitle',pdes='$pdes',pduration='$pduration',title='$title',des='$des',duration='$duration',hobbies='$hobbies',desception='$desception' WHERE id='$Uid'")or die("no match found");
		echo "Data updated Successfully";
		header('refresh:0');
	}
?>
<div class="container" align="center">
	<table border="8px">
		<tr>
			<th>Update</th>
			<th>Name</th>
			<th>DOB</th>
			<th>Contact</th>
			<th>Address</th>
			<th>Email</th>
			<th>Post Graduation</th>
			<th>Institute</th>
			<th>Pass out year</th>
			<th>Percentage</th>
			<th>Delete</th>
			
		</tr>
		
<?php
	$sql=mysqli_query($dbh,"SELECT * FROM deekshitha")or die("no match found");
		while($row=mysqli_fetch_array($sql))
			{
?>
		<tr>
			<td>
				<form method="post" action="crud2.php">
					<input type="hidden" name="Sid" value="<?php echo $row['id'];?>">
					<input type="Submit" class="button1" name="Select" value="Select">
				</form>
			</td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['dob'];?></td>
			<td><?php echo $row['phone'];?></td>
			<td><?php echo $row['address'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['pcourse'];?></td>
			<td><?php echo $row['pinst'];?></td>
			<td><?php echo $row['ppass'];?></td>
			<td><?php echo $row['pper'];?></td>
			<td>
				<form method="post" action="crud2.php">
					<input type="hidden" name="Dname" value="<?php echo $row['id'];?>">
					<input type="Submit" name="Delete" class="button1" value="Delete">
				</form>
			</td>
		</tr>
<?php
	}
?>
		</table>
</div>

<?php
if(isset($_POST['Select']))
	{
		$Uid=$_POST['Sid'];
	$sql=mysqli_query($dbh,"SELECT * FROM deekshitha WHERE id='$Uid'")or die("no match found");
		while($row=mysqli_fetch_array($sql))
			{
?>
<div align="center" class="container">
	<form method="post" action="crud2.php">
<h1 align="center">Please Fill the Form</h1>
	<h2>Personal Details</h2>
	<form action="crud2.php" method="post">
	<label for="name">Name   :   </label>
  	<input type="text" id="name" name="name" required="required" value="<?php echo $row['name'] ?>"></br></br>
  	<label for="name">DOB   :   </label>
  	<input type="text" id="name" name="dob" required="required" value="<?php echo $row['dob'] ?>"></br></br>
  	<label for="name">Phone No   :   </label>
  	<input type="text" id="name" name="phone" required="required" value="<?php echo $row['phone'] ?>"></br></br>
  	<label for="name">Address   :   </label>
  	<input type="text" id="name" name="address" required="required" value="<?php echo $row['address'] ?>"></br></br>
  	<label for="name">Email Id   :   </label>
  	<input type="text" id="name" name="email" required="required" value="<?php echo $row['email'] ?>"></br></br>

	
	<h2>Educational Details</h2>
	<h4>Post Graduation</h4>
	<label for="name">Course   :</label>
  		<input type="text" id="pcourse" name="pcourse" required="required" value="<?php echo $row['pcourse'] ?>"></br></br>
  		<label for="name">Institute:</label>
  		<input type="text" id="pinst" name="pinst" required="required" value="<?php echo $row['pinst'] ?>"></br></br>
  		<label for="name">Pass out year:</label>
  		<input type="number" id="pinst" name="ppass" required="required" value="<?php echo $row['ppass'] ?>"></br></br>
  		<label for="percentage">Percentage:</label>
  		<input type="number" id="pper" name="pper" required="required" value="<?php echo $row['pper'] ?>"></br></br>

  		<h4>Under Graduation:-</h4>
  		<label for="name">Course:</label>
  		<input type="text" id="ucourse" name="ucourse" required="required" value="<?php echo $row['ucourse'] ?>"></br></br>
  		<label for="name">Institute:</label>
  		<input type="text" id="uinst" name="uinst" required="required" value="<?php echo $row['uinst'] ?>"></br></br>
  		<label for="name">Passout year:</label>
  		<input type="number" id="uinst" name="upass" required="required" value="<?php echo $row['upass'] ?>"></br></br>
  		<label for="percentage">Percentage:</label>
  		<input type="number" id="uper" name="uper" required="required" value="<?php echo $row['uper'] ?>"></br></br>

  		<h4>PUC:-</h4>
  		<label for="name">Course:</label>
  		<input type="text" id="ccourse" name="ccourse" required="required" value="<?php echo $row['pcourse'] ?>"></br></br>
  		<label for="name">Institute:</label>
  		<input type="text" id="cinst" name="cinst" required="required" value="<?php echo $row['pinst'] ?>"></br></br>
  		<label for="name">Pass out year:</label>
  		<input type="number" id="cinst" name="cpass" required="required" value="<?php echo $row['ppass'] ?>"></br></br>
  		<label for="percentage">Percentage:</label>
  		<input type="number" id="cper" name="cper" required="required" value="<?php echo $row['pper'] ?>"></br></br>

		<h4>SSLC:-</h4>
  		<label for="name">Class:</label>
  		<input type="text" id="scourse" name="scourse" required="required" value="<?php echo $row['scourse'] ?>"></br></br>
  		<label for="name">Institute:</label>
  		<input type="text" id="sinst" name="sinst" required="required" value="<?php echo $row['sinst'] ?>"></br></br>
  		<label for="name">Pass out year:</label>
  		<input type="number" id="sinst" name="spass" required="required" value="<?php echo $row['spass'] ?>"></br></br>
  		<label for="percentage">Percentage:</label>
  		<input type="number" id="sper" name="sper" required="required" value="<?php echo $row['sper'] ?>"></br></br>

        <h4>Project Details:-</h4>
  		<label for="title">1) Project Title    :</label>
  		<input type="text" id="scourse" name="ptitle" required="required" value="<?php echo $row['ptitle'] ?>"></br></br>
  		<label for="desception">Project Desception:</label>
  		<input type="text" id="sinst" name="pdes" required="required" value="<?php echo $row['pdes'] ?>"></br></br>
  		<label for="months">Duration     :    </label>
  		<input type="number" id="sper" name="pduration" required="required" value="<?php echo $row['pduration'] ?>"></br></br>

		<label for="title">2) Project Title      :</label>
  		<input type="text" id="scourse" name="title" required="required" value="<?php echo $row['title'] ?>"></br></br>
  		<label for="desception">Project Desception:</label>
  		<input type="text" id="sinst" name="des" required="required" value="<?php echo $row['des'] ?>"></br></br>
  		<label for="months">Duration          :</label>
  		<input type="number" id="sper" name="duration" required="required" value="<?php echo $row['duration'] ?>"></br></br>
			</br>
		<label for="title">Hobbies:</label>
  		<input type="text" id="hobbies" name="hobbies" required="required" value="<?php echo $row['hobbies'] ?>"></br></br>
  		<label for="desception">Strenght:</label>
  		<input type="text" id="sinst" name="desception" required="required" value="<?php echo $row['desception'] ?>"></br></br>

	<input type="hidden" name="Uid" value="<?php echo $row['id'] ?>" >
	<input type="submit"  class="button" name="update" value="Update" >
	
	</form>
	</div>
	<?php
	}
}
?>
<form action="crud1.php" method="post" align="center">
	<input type="submit"  class="button" value="Back" >
</form>

</body>
</html>				