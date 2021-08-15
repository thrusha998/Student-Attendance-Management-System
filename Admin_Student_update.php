<?php
 include 'copyrights.php'; ?>

<?php
session_start();
?>
<html>
<?php
if(!($_SESSION['name']))
{
header("location: Admin_login.php");
}
?>
<head>
<title>Update Student Information</title>
</head>


<style>
body { 
background : url("bank27.jpg");
background-repeat:no-repeat;
 background-size: 100%;

}
input[type=text], select {
    width: 100%;
    padding:3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=text]:focus {
    border: 1px solid #555;
}

th {
	display: table-cell;
	font-weight:bold;
	text-align:center;
	color:white;
   }
td {
	display: table-cell;
	font-weight:bold;
	text-align:center;
	color:black;
   }

input[type=password], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=password]:focus {
    border: 1px solid #555;
}

input[type=number], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=number]:focus {
    border: 1px solid #555;
}
input[type=submit] {
    width: 80%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}

input[type=submit]:hover{
background-color: grey;
    border: none;
    color: black;
	}
	
input[type=button] {
    width: 30%;
	position:right;
	font-weight:bold;
    background-color: grey;
    color: white;
    padding: 5px 10px;
    margin: 8px 0;
    border: none;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}
	
	input[type=button]:hover{
background-color: #4CAF50;
    border: none;
    color: black;
	}
	
	input[type=email], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=email]:focus {
    border: 1px solid #555;
}
	
div {
    height: 550px;
    width: 800px;
	position:center;
    top: 80px;
    right: 750px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    background-color: #ccc;
    padding: 20px;
}

</style>

<div>
<body background="" style="background-color:white">
<marquee behavior="scroll" direction="left"><font color="purple" size="6"><b><strong>WELCOME TO THE STUDENT UPDATE DETAILS PAGE..!</strong></b></font></marquee>
<form method="post" action="">
<table width="100%" align='left|right|center|justify|char'>
<tr><td>
<table width='400' align='left|right|center|justify|char'>








</br>




<label  for="name">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>ADMIN_STUDENT_DETAILS&nbsp&nbspUPDATE&nbsp&nbspFORM</b></u></label><br><br>

<label for="usn"><b>Usn:</b></label> 
<input placeholder="Enter your usn" type="text" name="usn"/></br>



<label for="sname"><b>Student Name:</b></label> 
<input placeholder="Enter your name" type="text" name="sname"/>

 <label for="sem"><b>Sem:</b></label> 
<input placeholder="Enter your sem" type="number" name="sem" min="1" max="8"/>

<label for="branch"><b>Branch:</b></label> 
<input placeholder="Enter your branch" type="text" name="branch"/>


<label for="phone"><b>Phone:</b></label> 
<input placeholder="Enter your phone" type="number" name="phone"/>


<label for="email"><b>Email:</b></label> 
<input placeholder="Enter your email" type="email" name="email"/>


<label for="spassword"><b>password:</b></label> 
<input placeholder="Enter your password" type="password" name="spassword"/>





<label for="spassword"><b>Retype Password:</b></label> 
<input placeholder="Retype your password" type="password" name="retype"/></br>


&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> 
<br></br>

</table>
</td>

<td>
<?php
$con=mysqli_connect("localhost","root","","application");
mysqli_select_db($con,"application") or die("cannot connect to the database");
$query1="select usn,sname from student";
$run1=mysqli_query($con,$query1);

while ($row1=mysqli_fetch_array($run1))
{
	$usn=$row1[0];
$sname=$row1[1];



?>
<table width='200' border="1" align='left' style="float:left;">
<tr >
<th style="color:red;">usn</th>
<th style="color:red;">sname</th></tr>
<?php
echo "<tr align='right' bgcolor='white'><td>".$usn."</td>
 <td> ".$sname."</td>
</tr>";
}?>

</td>


</tr>


</table>


</td></tr>
</table>

<table>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="ADMIN HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="Admin_home.php"; } </script></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOG OUT" onclick="fun3()"/>
<script> function fun3() { window.location="Admin_logout.php"; } </script></br>
</div>
</form>

</body>
</html>



<tr bgcolor ='blue'>
   
   <th>Usn </th>
   <th>Student name</th>
   <th>Sem</th>
    <th>Branch</th>
   <th>Phone</th>
   <th>Email</th>
   <th>password</th></tr>
<?php

$con=mysqli_connect("localhost","root","","application");
mysqli_select_db($con,"application") or die("cannot connect to the database");
$get_name=$_SESSION['name'];
$query="select * from student ";

$run=mysqli_query($con,$query);

while ($row=mysqli_fetch_array($run))
{
$usn=$row[0];
$sname=$row[1];
$sem=$row[2];
$branch=$row[3];
$phone=$row[4];
$email=$row[5];
$spassword=$row[6];


?>

<tr align="right" bgcolor='white'>
<td>   <?php echo $usn; ?></td>
<td>   <?php echo $sname; ?> </td>
<td>   <?php echo $sem ?> </td>
<td>   <?php echo $branch ?> </td>
<td>   <?php echo $phone?> </td>
<td>   <?php echo $email ?> </td>
<td>   <?php echo $spassword ?> </td>
</tr>

<?php  
}

if(isset($_POST['submit']))
{

$usn=$_POST['usn'];
$sname=$_POST['sname'];
$sem=$_POST['sem'];
$branch=$_POST['branch'];
$phone=$_POST['phone'];
$email=$_POST['email'];
 $spassword=$_POST['spassword'];


if($usn =='')
{
echo "<script> alert('Please enter your usn')</script>";
exit();
}

if($sname =='')
{
echo "<script> alert('Please enter your name')</script>";
exit();
}
if($sem =='')
{
echo "<script> alert('Please enter your sem')</script>";
exit();
}
if($branch =='')
{
echo "<script> alert('Please enter your branch')</script>";
exit();
}
if($phone =='')
{
echo "<script> alert('Please enter your phone')</script>";
exit();
}

if($email =='')
{
echo "<script> alert('Please enter your email')</script>";
exit();
}

if($spassword =='')
{
echo "<script> alert('Please enter your password')</script>";
exit();
}





if(isset($_POST['submit']))
{
 
$spassword=$_POST['spassword'];
 $retype=$_POST['retype'];

 


if($spassword =='')
{
echo "<script> alert('Please enter your password')</script>";
exit();
}

if($retype =='')
{
echo "<script> alert('Please enter your password again')</script>";
exit();
}
if($spassword!=$retype)
{ 
echo "<script> alert('reenter the password') </script>";
}
else
{
$query="update student set usn='$usn',sname='$sname',sem='$sem',branch='$branch',phone='$phone',email='$email',spassword='$spassword' where usn='$usn'";

if(mysqli_query($con,$query))
{
$_SESSION['name']=$get_name;
echo "<script> alert('Details changed Successfully') </script>";
echo "<br>";
echo " <a href='Admin_Student_view_details.php'>View result</a>";
} 
else{
	echo "<script> alert('Details cannot be changed, invalid student name!!!!!') </script>";
}
}
} 
}


?> 
</table>
</html>
