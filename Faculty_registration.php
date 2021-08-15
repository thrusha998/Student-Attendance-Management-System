

<head>
<title>FACULTY REGISTRATION FORM</title>

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
<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>FACULTY&nbsp&nbspREGISTRATION&nbsp&nbspFORM</b></u></label><br><br>

<tr>
<td>


<label for="faculty name"><b>Faculty Name:</b></label> 
<input placeholder="Enter your name" type="text" name="fname" /></br>

<label for="branch"><b>Branch:</b></label> 
<input placeholder="Enter your branch" type="text" name="branch"/></br>

<label for="yoe"><b>Year Of Experience:</b></label> 
<input placeholder="Enter your year of experience" type="number" name="yoe" min="1" max="60"/></br>

<label for="phone"><b>Phone Number:</b></label> 
<input placeholder="Enter your phone number" type="number" name="phone"/></br>

<label for="email id"><b>Email id:</b></label> 
<input placeholder="Enter your email id" type="email" name="email_id" /></br>


<label for="password"><b>Password:</b></label> 
<input placeholder="Enter your password" type="password" name="password"/></br>



&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOGIN PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="Faculty_login.php"; } </script></br>

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
 $fname=$_POST['fname'];
 $branch=$_POST['branch'];
  $yoe=$_POST['yoe'];
  $phone=$_POST['phone'];
  $email_id=$_POST['email_id'];
  $password=$_POST['password'];
 


if($fname =='')
{
echo "<script> alert('Please enter your name')</script>";
exit();
}

if($branch =='')
{
echo "<script> alert('Please enter your branch name')</script>";
exit();
}

if($yoe =='')
{
echo "<script> alert('Please enter your year of experience')</script>";
exit();
}


if($phone =='')
{
echo "<script> alert('Please enter valid phone number')</script>";
exit();
}
if($email_id =='')
{
echo "<script> alert('Please enter your email id')</script>";
exit();
}
if(strlen($phone)!=10)
{
echo "<script> alert('Please enter 10digit valid phone number')</script>";
exit();
}


if($password =='')
{
echo "<script> alert('Please enter your password')</script>";
exit();
}


$check_email="select * from faculty where email='$email_id'";

$run = mysqli_query($con,$check_email);

//print mysqli_num_rows($run);

if(mysqli_num_rows($run)>0)
{
echo "<script> alert('Email already exists') </script>";
exit();
}

$query= "insert into faculty(fname,branch,yoe,phone,email,password) values ('$fname','$branch','$yoe','$phone','$email_id','$password')";

if(mysqli_query($con,$query))
{

echo "<script> alert('Faculty is Succussfully registered')</script>";

}


}


?>
