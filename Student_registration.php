
<head>
<title>STUDENT REGISTRATION FORM</title>

</head>

<style>

body {
  background:
     url(image/image.jpg)    /* image */
     left center / 600px 700px /* position / size */
     no-repeat                /* repeat */
     fixed                    /* attachment */
     padding-box              /* origin */
     content-box              /* clip */
     white;                     /* color */
}




input[type=text], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=text]:focus {
    border: 1px solid #555;
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
    width: 60%;
    background-color: grey;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}

input[type=submit]:hover{
background-color: green;
    border: none;
    color: black;
	}
	input[type=button] {
    width: 30%;
	position:right;
	font-weight:bold;
    background-color: grey;
    color: black;
    padding: 5px 10px;
    margin: 8px 0;
    border: none;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}
	
	input[type=button]:hover{
background-color:yellow;
    border: none;
    color: black;
	}
	
div {
    height: 550px;
    width: 400px;
	position:absolute;
    top: 100px;
    right: 500px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<marquee behavior="scroll" direction="left"><font color="purple" size="6"><b><strong>WELCOME TO THE REGISTRATION PAGE..!</strong></b></font></marquee>


</body>
<body>
<img src="image/images.jpg" alt=""> 

<div>
<form method="post" action="">
<label  for="usn">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>STUDENT&nbsp&nbspREGISTRATION&nbsp&nbspFORM</b></u></label><br><br>

<tr>
<td>


<label for="usn"><b>Usn:</b></label> 
<input placeholder="Enter your usn" type="text" name="usn" pattern="[0-4][a-zA-Z][a-zA-Z][0-9][0-9][a-zA-Z][a-zA-Z][0-9][0-9][0-9]" /></br>

<label for="sname"><b>Student Name:</b></label> 
<input placeholder="Enter your name" type="text" name="sname"/></br>

<label for="sem"><b>Sem:</b></label> 
<input placeholder="Enter your sem" type="number" name="sem" min="1" max="8"/></br>

<label for="branch"><b>Branch:</b></label> 
<input placeholder="Enter your branch" type="text" name="branch"/></br>

<label for="phone"><b>Phone Number:</b></label> 
<input placeholder="Enter your phone number" type="text" name="phone"/></br>

<label for="email"><b>Email id:</b></label> 
<input placeholder="Enter your email" type="email" name="email" /></br>


<label for="spassword"><b>Password:</b></label> 
<input placeholder="Enter your password" type="password" name="spassword"/></br>



&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOGIN PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="Student_login.php"; } </script></br>

</form>
</div>
</body>


</html>


<?php

session_start();
$con=mysqli_connect("localhost","root","","application");
mysqli_select_db($con,"application") or die("cannot connect to the database");

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
echo "<script> alert('Please enter valid phone number')</script>";
exit();
}
if($email=='')
{
echo "<script> alert('Please enter your email id')</script>";
exit();
}
if(strlen($phone)!=10)
{
echo "<script> alert('Please enter 10digit valid phone number')</script>";
exit();
}


if($spassword =='')
{
echo "<script> alert('Please enter your password')</script>";
exit();
}


$check_email="select * from student where email='$email'";

$run = mysqli_query($con,$check_email);



if(mysqli_num_rows($run)>0)
{
echo "<script> alert('Email already exists') </script>";
exit();
}

$query= "insert into student(usn,sname,sem,branch,phone,email,spassword) values ('$usn','$sname','$sem','$branch','$phone','$email','$spassword')";

if(mysqli_query($con,$query))
{

echo "<script> alert('Student is Succussfully registered')</script>";

}


}


?>
