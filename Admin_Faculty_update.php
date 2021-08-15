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
<title>Update Faculty Information</title>
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
<marquee behavior="scroll" direction="left"><font color="purple" size="6"><b><strong>WELCOME TO THE FACULTY UPDATE DETAILS PAGE..!</strong></b></font></marquee>
<form method="post" action="">
<table width="100%" align='left|right|center|justify|char'>
<tr><td>
<table width='400' align='left|right|center|justify|char'>








</br>




<label  for="name">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>ADMIN_DETAILS&nbsp&nbspUPDATE&nbsp&nbspFORM</b></u></label><br><br>

<label for="fname"><b>faculty name:</b></label> 
<input placeholder="Enter your name" type="text" name="fname"/></br>

<label for="branch"><b>branch:</b></label> 
<input placeholder="Enter your branch" type="text" name="branch"/>

 <label for="yoe"><b>year of experience:</b></label> 
<input placeholder="Enter your year of experience" type="number" name="yoe" min="1" max="60"/>

<label for="phone"><b>phone no:</b></label> 
<input placeholder="Enter your phone no" type="number" name="phone"/>


<label for="email"><b>email:</b></label> 
<input placeholder="Enter your email" type="email" name="email"/>


<label for="password"><b>password:</b></label> 
<input placeholder="Enter your password" type="password" name="password"/>





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
$query1="select fid,fname from faculty";
$run1=mysqli_query($con,$query1);

while ($row1=mysqli_fetch_array($run1))
{
	$fid=$row1[0];
$fname=$row1[1];



?>
<table width='200' border="1" align='left' style="float:left;">
<tr >
<th style="color:red;">fid</th>
<th style="color:red;">fname</th></tr>
<?php
echo "<tr align='right' bgcolor='white'><td>".$fid."</td>
 <td> ".$fname."</td>
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
   
   <th> fname </th>
   <th>Branch</th>
   <th>Year Of Experience</th>
   <th>Phone</th>
   <th>Email</th>
   <th>password</th></tr>
<?php

$con=mysqli_connect("localhost","root","","application");
mysqli_select_db($con,"application") or die("cannot connect to the database");
$get_name=$_SESSION['name'];
$query="select * from faculty ";

$run=mysqli_query($con,$query);

while ($row=mysqli_fetch_array($run))
{
$fname=$row[1];
$branch=$row[2];
$yoe=$row[3];
$phone=$row[4];
$email=$row[5];
$password=$row[6];


?>

<tr align="right" bgcolor='white'>
<td>   <?php echo $fname; ?></td>
<td>   <?php echo $branch; ?> </td>
<td>   <?php echo $yoe; ?> </td>
<td>   <?php echo $phone;?> </td>
<td>   <?php echo $email; ?> </td>
<td>   <?php echo $password ?> </td>
</tr>

<?php  
}

if(isset($_POST['submit']))
{

$fname=$_POST['fname'];
$branch=$_POST['branch'];
$yoe=$_POST['yoe'];
$phone=$_POST['phone'];
$email=$_POST['email'];
 $password=$_POST['password'];


if($fname =='')
{
echo "<script> alert('Please enter your name')</script>";
exit();
}

if($branch=='')
{
echo "<script> alert('Please enter your branch')</script>";
exit();
}
if($yoe =='')
{
echo "<script> alert('Please enter your password')</script>";
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

if($password =='')
{
echo "<script> alert('Please enter your password')</script>";
exit();
}





if(isset($_POST['submit']))
{
 
$password=$_POST['password'];
 $retype=$_POST['retype'];

 


if($password =='')
{
echo "<script> alert('Please enter your password')</script>";
exit();
}

if($retype =='')
{
echo "<script> alert('Please enter your password again')</script>";
exit();
}
if($password!=$retype)
{ 
echo "<script> alert('reenter the password') </script>";
}
else
{
$query="update faculty set fname='$fname',branch='$branch',yoe='$yoe',phone='$phone',email='$email',password='$password' where fname='$fname'";

if(mysqli_query($con,$query))
{
$_SESSION['name']=$get_name;
echo "<script> alert('Details changed Successfully') </script>";
echo "<br>";
echo " <a href='Admin_Faculty_view_details.php'>View result</a>";
} 
else{
	echo "<script> alert('Details cannot be changed, invalid faculty name!!!!!') </script>";
}
}
} 
}


?> 
</table>
</html>
