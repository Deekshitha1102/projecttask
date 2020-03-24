<html>
<head>
<h1><center><u><p style="color:#9e7306; font-size:30px;background-color:#eee;">Information</p></u></center></h1>
<style>
body {
  background-color: lightyellow;
}

h1 {
  color: white;
  text-align: center;
}
input[type=text], select {
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #fff;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=number], select {
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #fff;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 25%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

table {
   width:100%;
 }
table, th, td {
   border: 1px solid black;
   border-collapse: collapse;
 }
th, td {
 padding:15px;
 text-align: left;
 }
table#01 tr:nth-child(even) {
  background-color: #eee;
}
table#01 tr:nth-child(odd) {
  background-color: #fff;
}

table#t01 th {
  background-color: black;
 color: white;

}
</style>
</head>
	<body>
	<a href="crud.php"></a>
	<div  align="left">
	<form action="crud1.php" method="POST">
     <label for="name">E-mail Id  :   </label>
  		<input type="text" id="name" name="email" required="required"></br></br>
	<input type="submit" class="button" value="Generate"></br><br></br>
</div>


<?php
	$dbh=mysqli_connect('localhost','root','','deekshitha');

	if(!$dbh)
	{
		die('Could not Connect My Sql:' .mysqli_error());
	}
	if(isset($_POST['email']))
	{
		$n=$_POST['email'];
		if($n=="")
			echo "enter a E-mail Id";
		else
		{
			$sql=mysqli_query($dbh,"SELECT * FROM deekshitha WHERE email='$n'")or die("no match found");
			while ($row = mysqli_fetch_array($sql))
		{
?>

	
	<h2 align="left"><B><u>Personal Detail</u></B></h2>
	
		<h3> Name : <?php echo $row['name'];?> </h3>
		<h3> Dob : <?php echo $row['dob'];?></h3>
		<h3> Phone No : <?php echo $row['phone'];?></h3>
		<h3> address : <?php echo $row['address'];?></h3>
		<h3> E-mail : <?php echo $row['email'];?></h3>	
	
	<h2 align="left"><b><u>Educational Detail</u></b></h2>
			<table id="t01">
			<tr>
			<th>COURSE</th>
			<th>INSTITUTION</th>
			<th>PASSED YEAR</th>
			<th>CGPA/Percentage</th>
			</tr>
			<tr>
			<td><?php echo $row['pcourse'];?></td>
			<td><?php echo $row['pinst'];?></td>
			<td><?php echo $row['ppass'];?></td>
			<td><?php echo $row['pper'];?></td>
			</tr>
			<tr>
			<td><?php echo $row['ucourse'];?></td>
			<td><?php echo $row['uinst'];?></td>
			<td><?php echo $row['upass'];?></td>
			<td><?php echo $row['uper'];?></td>
			</tr>
			<tr>
			<td><?php echo $row['ccourse'];?></td>
			<td><?php echo $row['cinst'];?></td>
			<td><?php echo $row['cpass'];?></td>
			<td><?php echo $row['cper'];?></td>
			</tr>
			<tr>
			<td><?php echo $row['scourse'];?></td>
			<td><?php echo $row['sinst'];?></td>
			<td><?php echo $row['spass'];?></td>
			<td><?php echo $row['sper'];?></td>
			</tr>
		</table>

	<br>
	<h2 align="left"><b><u>Project Details</u></b></h2>
	<table  id="t01">
			<tr>
			<th>PROJECT</th>
			<th>DESCRIPTION</th>
			<th>DURATION</th>
			</tr>
	
         <tr>
		<td><?php echo $row['ptitle'];?></td>
		<td><?php echo $row['pdes'];?></td>
		<td><?php echo $row['pduration'];?></td>
		</tr>
		<tr>
		<td><?php echo $row['title'];?></td>
		<td><?php echo $row['des'];?></td>
		<td><?php echo $row['duration'];?></td>
        </tr>
     <br>

     <br>
	
	</table>
	<h2 align="left">Hobbies</h2>
	<h5><?php echo $row['hobbies'];?></h5>
	<br>

	<h2 align="left">Strengths</h2>
	<h5><?php echo $row['desception'];?></h5>
	<br><br>
</form>
		<div  align="center">
	<form action="crud2.php" method="POST">
	<input type="submit" class="button" value="Chang"></br>
	</div>
</form>
</form>


	
<?php
		}
	}
	}	
?>	
<form action="crud.php" method="post" align="center">
	<input type="submit"  class="button" value="Back" >
</form>

</body>
</html>			