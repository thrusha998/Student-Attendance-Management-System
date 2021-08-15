<?php
 include 'copyrights.php'; ?>


<?php
 include 'copyrights.php'; ?>

<?php
session_start();
?>
<html>
<?php
if(!($_SESSION['usn']))
{
header("location: Student_login.php");
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
    height: 610px;
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
<marquee behavior="scroll" direction="left"><font color="purple" size="6"><b><strong>WELCOME TO THE STUDENT UPDATE DETAILS PAGE..!</strong></b></font></marquee>
<form method="post" action="">
<table width='800' align='left|right|center|justify|char'>
<tr bgcolor ='blue'>
   <th>Usn</th>
   <th>Student name </th>
   <th>Sem</th>
   <th>Branch</th>
   <th>Phone No</th>
   <th>Email</th>
   <th>password</th>

</br>




<label  for="usn">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>STUDENT_DETAILS&nbsp&nbspUPDATE&nbsp&nbspFORM</b></u></label><br><br>

<label for="usn"><b>Usn:</b></label> 
<input placeholder="Enter your usn" type="text" name="usn"/></br>

<label for="sname"><b>Student Name:</b></label> 
<input placeholder="Enter your name" type="text" name="sname"/></br>

<label for="sem"><b>Sem:</b></label> 
<input placeholder="Enter your sem" type="number" name="sem"/></br>

<label for="branch"><b>Branch:</b></label> 
<input placeholder="Enter your branch" type="text" name="branch"/></br>

 <label for="phone"><b>Phone Number:</b></label> 
<input placeholder="Enter your phone number" type="number" name="phone"/>


 <label for="email"><b>Email:</b></label> 
<input placeholder="Enter your email" type="email" name="email"/>

<label for="spassword"><b>Password:</b></label> 
<input placeholder="Enter your password" type="password" name="spassword"/>

<label for="spassword"><b>Retype Password:</b></label> 
<input placeholder="Retype your password" type="password" name="retype"/></br>


&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> 
<br></br>



Click here for &nbsp&nbsp
<input type="button" color="black"  value="STUDENT HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="Student_home.php"; } </script></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOG OUT" onclick="fun3()"/>
<script> function fun3() { window.location="Student_logout.php"; } </script></br>
</div>
</form>

</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","application");
mysqli_select_db($con,"application") or die("cannot connect to the database");
$get_usn=$_SESSION['usn'];
$query="select * from student where usn='$get_usn'";
$run=mysqli_query($con,$query);



while ($row=mysqli_fetch_array($run))
{
$usn=$row[1];
$sname=$row[2];
$sem=$row[3];
$branch=$row[4];
$phone=$row[5];
$email=$row[6];
$spassword=$row[7];
?>

<tr align="right" bgcolor='white'>
<td>   <?php echo $usn; ?></td>
<td>   <?php echo $sname; ?> </td>
<td>   <?php echo $sem ?> </td>
<td>   <?php echo $branch; ?> </td>
<td>   <?php echo $phone; ?> </td>
<td>   <?php echo $email; ?> </td>
<td>   <?php echo $spassword; ?> </td>



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

if($phone == '')
{
echo "<script> alert('Please enter valid phone number')</script>";
exit();
}

if($email == '')
{
echo "<script> alert('Please enter valid email')</script>";
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
if($spassword==$retype)
{
$query="update student set usn='$usn',sname='$sname',sem='$sem',branch='$branch',phone='$phone',email='$email', spassword='$spassword', where usn='$get_usn'";

if(mysqli_query($con,$query))
{
$_SESSION['usn']=$get_usn;
echo "<script> alert('Password changed Successfully') </script>";
echo "<br>";
header("location: Student_home.php");
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

$query="update student set usn='$usn', sname='$sname', sem='$sem', branch='$branch', phone='$phone',email='$email' ,spassword='$spassword' where usn='$get_usn'";
if(mysqli_query($con,$query))
{
$_SESSION['usn']=$get_usn;
echo "<script> alert('Updated Successfully') </script>";
echo "<br>";
echo " <a href='Student_view_details.php'>View result</a>"; 
}
else { 
echo "ERROR"; 
} 
}
?> 
</html>
