<html>

<head><h1><b><u><center>INFORMATION</h1></u></b></center>
<style>
body {
  background-color: lightblue;
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





</style>
</head>
<body>

<?php
$dbh=mysqli_connect('localhost','root','','deekshitha');

if(!$dbh)
{
  die('Could not Connect My Sql:' .mysql_error());
}
if(isset($_POST['name']))
{ 
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
  
  if($name!="")
  { 
  $query="INSERT INTO deekshitha(name,dob,phone,address,email,pcourse,pinst,ppass,pper,ucourse,uinst,upass,uper,ccourse,cinst,cpass,cper,scourse,sinst,spass,sper,ptitle,pdes,pduration,title,des,duration,hobbies,desception) VALUES('$name','$dob','$phone','$address','$email','$pcourse','$pinst','$ppass','$pper','$ucourse','$uinst','$upass','$uper','$ccourse','$cinst','$cpass','$cper','$scourse','$sinst','$spass','$sper','$ptitle','$pdes','$pduration','$title','$des','$duration','$hobbies','$desception')";
  $result=mysqli_query($dbh,$query);
  echo "Information Stored Successfully";
  }
  else
    echo "Invalid Details";
}
?>
<div align="center" class="container">
<div align="center">
<h1 align="center"></h1>
  <table>
    <tr>
      <td>
        <span onclick="document.getElementById('personal information').style.display='block';document.getElementById('educational details').style.display='none';document.getElementById('project details').style.display='none';document.getElementById('others').style.display='none';" style="cursor:pointer">
        <input  type="submit" value="Personal Details">
        </span>
      </td>
      <td>
        <span onclick="document.getElementById('personal information').style.display='none';document.getElementById('educational details').style.display='block';document.getElementById('project details').style.display='none';document.getElementById('others').style.display='none';" style="cursor:pointer">
        <input type="submit"   value="Educational Details">
        </span>
      </td>
      <td>
        <span onclick="document.getElementById('personal information').style.display='none';document.getElementById('educational details').style.display='none';document.getElementById('project details').style.display='block';document.getElementById('others').style.display='none';" style="cursor:pointer">
        <input type="submit"   value="Project Details">
        </span>
      </td>
      <td>
        <span onclick="document.getElementById('personal information').style.display='none';document.getElementById('educational details').style.display='none';document.getElementById('project details').style.display='none';document.getElementById('others').style.display='block';" style="cursor:pointer">
        <input type="submit"   value="Strengths & Hobbies">
        </span>
      </td>
    </tr>
  </table>
  </div>
  <form method="post" action="crud.php">
  

<div id="personal information" style="display:none">
<form action="crud.php" method="POST">
		<h1>Personal Information</h1>
  		<label for="name">Name   :   </label></br>
  		<input type="text" id="name" name="name" required="required"></br></br>
  		<label for="dob">DOB:   </label></br>
  		<input type="number" id="dob" name="dob" required="required" placeholder="dd/mm/yy"></br></br>
  		<label for="phone">Phone No:  </label></br>
  		<input type="number" id="phone" name="phone" required="required"></br></br>
  		<label for="name">Address :</label></br>
  		<input type="text" id="address" name="address" required="required"></br></br>
  		<label for="name">E-Mail ID :</label></br>
  		<input type="text" id="email" name="email" required="required"></br></br>
  		</div>

  	<div id="educational details" style="display:none"> 
		<h1>Educational Details</h1>
		<h4>Post Graduation:-</h4>
  		<label for="name">Course   :</label><br>
  		<input type="text" id="pcourse" name="pcourse" required="required"></br></br>
  		<label for="name">Institute:</label></br>
  		<input type="text" id="pinst" name="pinst" required="required"></br></br>
  		<label for="name">Pass out year:</label></br>
  		<input type="number" id="pinst" name="ppass" required="required"></br></br>
  		<label for="percentage">Percentage:</label></br>
  		<input type="number" id="pper" name="pper" required="required"></br></br>

  		<h4>Under Graduation:-</h4>
  		<label for="name">Course:</label></br>
  		<input type="text" id="ucourse" name="ucourse" required="required"></br></br>
  		<label for="name">Institute:</label></br>
  		<input type="text" id="uinst" name="uinst" required="required"></br></br>
  		<label for="name">Passout year:</label></br>
  		<input type="number" id="uinst" name="upass" required="required"></br></br>
  		<label for="percentage">Percentage:</label></br>
  		<input type="number" id="uper" name="uper" required="required"></br></br>

  		<h4>PUC:-</h4>
  		<label for="name">Course:</label></br>
  		<input type="text" id="ccourse" name="ccourse" required="required"></br></br>
  		<label for="name">Institute:</label></br>
  		<input type="text" id="cinst" name="cinst" required="required"></br></br>
  		<label for="name">Pass out year:</label></br>
  		<input type="number" id="cinst" name="cpass" required="required"></br></br>
  		<label for="percentage">Percentage:</label></br>
  		<input type="number" id="cper" name="cper" required="required"></br></br>

		<h4>SSLC:-</h4>
  		<label for="name">Class:</label></br>
  		<input type="text" id="scourse" name="scourse" required="required"></br></br>
  		<label for="name">Institute:</label></br>
  		<input type="text" id="sinst" name="sinst" required="required"></br></br>
  		<label for="name">Pass out year:</label></br>
  		<input type="number" id="sinst" name="spass" required="required"></br></br>
  		<label for="percentage">Percentage:</label></br>
  		<input type="number" id="sper" name="sper" required="required"></br></br>
     </div>

     <div id="project details" style="display:none">
		<h4>Project Details:-</h4>


  		<label for="title">1) Project Title    :</label><br>
  		<input type="text" id="scourse" name="ptitle" required="required"></br></br>
  		<label for="desception">Project Desception:</label><br>
  		<input type="text" id="sinst" name="pdes" required="required"></br></br>
  		<label for="months">Duration     :    </label><br>
  		<input type="number" id="sper" name="pduration" required="required"></br></br>

		<label for="title">2) Project Title      :</label><br>
  		<input type="text" id="scourse" name="title" required="required"></br></br>
  		<label for="desception">Project Desception:</label></br>
  		<input type="text" id="sinst" name="des" required="required"></br></br>
  		<label for="months">Duration          :</label></br>
  		<input type="number" id="sper" name="duration" required="required"></br></br>
			</br>
    </div>
    <div id="others" style="display:none">
		<label for="title">Hobbies:</label></br>
  		<input type="text" id="hobbies" name="hobbies" required="required"></br></br>
  		<label for="desception">Strenght:</label></br>
  		<input type="text" id="sinst" name="desception" required="required"></br></br>  

  		<input type="submit" class="button" value="Submit">

	</div>
	</form>
  <form action="crud1.php" method="post" align="center">
  <input type="submit"  class="button" value="changes" >
</form>
</body>
</html>