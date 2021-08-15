<?php
 include 'copyrights.php'; ?>



<html>
<head>
<title> FACULTY LOGIN FORM</title>
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
    width: 80%;
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
    width: 100%;
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
background-color: green;
    border: none;
    color: black;
	}
	
div {
    height: 550px;
    width: 230px;
	position:absolute;
    top: 50px;
    right: 700px;
	border-radius: 10px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>





<div>
<form method="get" action="">   <!-- processing page is the same-->
<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>FACULTY&nbsp&nbspLOGIN&nbsp&nbspFORM</b></u></label><br><br>

<label for="Usn"><b>Faculty Name:</b></label> 
<input placeholder="Enter your name" type="text" name="fname" /></br>

<label for="password"><b>Password:</b></label> 
<input placeholder="Enter your password" type="password" name="password" /></br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> 
</form>
</div>
</body>



<?php
session_start();
if(isset($_GET['submit']))
{
$con=mysqli_connect("localhost","root","","application");
mysqli_select_db($con,"application") or die("cannot connect to the database");
$fname=$_GET['fname'];
 $password=$_GET['password'];
 

if($fname =='')
{
echo "<script> alert('Please enter your name ')</script>";
exit();
}

if($password =='')
{
echo "<script> alert('Please enter your password')</script>";
exit();
}

$query="select * from faculty where fname='$fname' and password='$password'"; 
$run=mysqli_query($con,$query);

   if(mysqli_num_rows($run)>0)
   {
	   
   $_SESSION['fname']=$fname;
	echo "<script> alert('Login Successful')</script>";
	header("location: Faculty_home.php?fname=".$fname);
}

   else
   {
    echo "<script> alert('Invalid Login')</script>";
   }
}

?>

</body>
</html>
