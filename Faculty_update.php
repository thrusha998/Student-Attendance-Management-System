<?php
 include 'copyrights.php'; ?>


<?php
session_start();
?>
<html>
<?php
if(!($_SESSION['fname']))
{
header("location: Faculty_login.php");
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
<marquee behavior="scroll" direction="left"><font color="purple" size="6"><b><strong>WELCOME TO THE FACULTY UPDATE DETAILS PAGE..!</strong></b></font></marquee>
<form method="post" action="">
<table width='800' align='left|right|center|justify|char'>
<tr bgcolor ='blue'>
   <th>Faculty Name</th>
   <th>Branch </th>
   <th>Year Of Experience</th>
   <th>Phone No</th>
   <th>Email</th>
   <th>Password</th>


</br>




<label  for="fname">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>FACULTY_DETAILS&nbsp&nbspUPDATE&nbsp&nbspFORM</b></u></label><br><br>

<label for="fname"><b>Faculty Name:</b></label> 
<input placeholder="Enter your name" type="text" name="fname"/></br>

<label for="branch"><b>Branch:</b></label> 
<input placeholder="Enter your branch" type="text" name="branch"/></br>

<label for="yoe"><b>Year Of Experience:</b></label> 
<input placeholder="Enter your experience" type="number" name="yoe"/></br>

<label for="email"><b>Email:</b></label> 
<input placeholder="Enter your email" type="email" name="email"/></br>

 <label for="phone"><b>Phone Number:</b></label> 
<input placeholder="Enter your phone number" type="number" name="phone"/>

<label for="password"><b>Password:</b></label> 
<input placeholder="Enter your password" type="password" name="password"/>

<label for="password"><b>Retype Password:</b></label> 
<input placeholder="Retype your password" type="password" name="retype"/></br>


&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> 
<br></br>



Click here for &nbsp&nbsp
<input type="button" color="black"  value="FACULTY HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="Faculty_home.php"; } </script></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOG OUT" onclick="fun3()"/>
<script> function fun3() { window.location="Faculty_logout.php"; } </script></br>
</div>
</form>

</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","application");
mysqli_select_db($con,"application") or die("cannot connect to the database");
$get_fname=$_SESSION['fname'];
$query="select * from faculty where fname='$get_fname'";
$run=mysqli_query($con,$query);



while ($row=mysqli_fetch_array($run))
{
$fname=$row[1];
$branch=$row[2];
$yoe=$row[3];
$email=$row[4];
$phone=$row[5];
$password=$row[6];
?>

<tr align="right" bgcolor='white'>
<td>   <?php echo $fname; ?></td>
<td>   <?php echo $branch; ?> </td>
<td>   <?php echo $yoe; ?> </td>
<td>   <?php echo $email; ?> </td>
<td>   <?php echo $phone; ?> </td>
<td>   <?php echo $password; ?> </td>



</tr>

<?php  
}

if(isset($_POST['submit']))
{

$fname=$_POST['fname'];
$branch=$_POST['branch'];
$yoe=$_POST['yoe'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
 


if($fname =='')
{
echo "<script> alert('Please enter your name')</script>";
exit();
}
if($branch =='')
{
echo "<script> alert('Please enter your branch')</script>";
exit();
}
if($yoe =='')
{
echo "<script> alert('Please enter your experience')</script>";
exit();
}

if($email =='')
{
echo "<script> alert('Please enter your email')</script>";
exit();
}

if($phone == '')
{
echo "<script> alert('Please enter valid phone number')</script>";
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
if($password==$retype)
{
$query="update faculty set fname='$fname',branch='$branch',yoe='$yoe',phone='$phone',email='$email', password='$password', where fname='$get_fname'";

if(mysqli_query($con,$query))
{
$_SESSION['fname']=$get_fname;
echo "<script> alert('Password changed Successfully') </script>";
echo "<br>";
header("location: Faculty_home.php");
} 
}
else { 
echo "<script> alert('reenter the password') </script>"; 
} 
}
 










if (strlen($phone)!=10)
{
echo "<script> alert('Please enter 10digit valid phone number')</script>";
exit();
}

$query="update faculty set fname='$fname', branch='$branch', yoe='$yoe', email='$email', phone='$phone' ,password='$password' where fname='$get_fname'";
if(mysqli_query($con,$query))
{
$_SESSION['fname']=$get_fname;
echo "<script> alert('Updated Successfully') </script>";
echo "<br>";
echo " <a href='Faculty_view_details.php'>View result</a>"; 
}
else { 
echo "ERROR"; 
} 
}
?> 
</html>
