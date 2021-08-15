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
<title>Update Admin Information</title>
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
<body background="" style="background-color:white"></body>
<marquee behavior="scroll" direction="left"><font color="purple" size="6"><b><strong>WELCOME TO THE ADMIN UPDATE DETAILS PAGE..!</strong></b></font></marquee>
<form method="post" action="">
<table width='800' align='left|right|center|justify|char'>
<tr bgcolor ='blue'>
   
   <th> name </th>
   <th>password</th>
   <th>email</th>

</br>




<label  for="name">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>ADMIN_DETAILS&nbsp&nbspUPDATE&nbsp&nbspFORM</b></u></label><br><br>

<label for="name"><b>name:</b></label> 
<input placeholder="Enter your name" type="text" name="name"/></br>



<label for="password"><b>Password:</b></label> 
<input placeholder="Enter your password" type="password" name="password"/>

 <label for="email"><b>email:</b></label> 
<input placeholder="Enter your email" type="email" name="email"/>

<label for="spassword"><b>Retype Password:</b></label> 
<input placeholder="Retype your password" type="password" name="retype"/></br>


&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> 
<br></br>



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
<?php
$con=mysqli_connect("localhost","root","","application");
mysqli_select_db($con,"application") or die("cannot connect to the database");
$get_name=$_SESSION['name'];
$query="select * from admin where name='$get_name'";
$run=mysqli_query($con,$query);

while ($row=mysqli_fetch_array($run))
{
$name=$row[1];
$password=$row[2];
$email=$row[3];

?>

<tr align="right" bgcolor='white'>
<td>   <?php echo $name; ?></td>
<td>   <?php echo $password; ?> </td>
<td>   <?php echo $email ?> </td>



</tr>

<?php  
}

if(isset($_POST['submit']))
{

$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];


 


if($name =='')
{
echo "<script> alert('Please enter your name')</script>";
exit();
}
if($password =='')
{
echo "<script> alert('Please enter your password')</script>";
exit();
}
if($email =='')
{
echo "<script> alert('Please enter your email')</script>";
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
if($password==$retype)
{
$query="update admin set name='$name',password='$password',email='$email' where name='$get_name'";

if(mysqli_query($con,$query))
{
$_SESSION['name']=$get_name;
echo "<script> alert('Details changed Successfully') </script>";
echo "<br>";
echo " <a href='Admin_view_details.php'>View result</a>";
} 
}
else { 
echo "<script> alert('reenter the password') </script>"; 
} 
}
}




?> 
</html>
