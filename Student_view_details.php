<?php
 include 'copyrights.php'; ?>




<html>
<head>
<title>Student View Details</title>

</head>

<style>



div {
    height: 300px;
    width: 550px;
	position:absolute;
    top: 200px;

    right: 450px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    background-color: white;
    padding: 20px;
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
   
   input[type=button] {
    width: 50%;
	position:right;
	font-weight:bold;
    background-color: grey;
    color: black;
    padding: 5px 10px;
    margin: 8px 0;
    border: none;
	border: 1px solid #ccc;
    border-radius: 4px;
    cursor: pointer;
	}
	
	input[type=button]:hover{
background-color: yellow;
    border: none;
    color: black;
	}
	
		
	input[type=button1] {
    width: 25%;
	position:right;
    background-color: grey;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
	font-weight:bold;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}

input[type=button1]:hover{
background-color: #FF0000;
    border: none;
    color: black;
	}
	
	div 
	{
   	position:absolute;
    right:100px;
    padding:10px;
	font-weight:bold;
	}
	

</style>
<body background="" style="background-color:white"></body>
<background-color:"white">
<marquee behavior="scroll" direction="left"><font color="purple"  size="6"><b><strong>WELCOME TO THE STUDENT DETAILS PAGE..!</strong></b></font></marquee>
<form action="" method="post">
<table width='800' align='center border='5'>
<tr bgcolor ='blue'>
   <th> Usn</th>
   <th>Student Name</th>
   <th>Sem</th>
   <th>Branch</th>
   <th>Phone Number</th>
   <th>Email Id</th>
   <th>Password</th>
 

</tr>
<div>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="STUDENT HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="Student_home.php"; } </script></br>


Click here for &nbsp&nbsp
<input type="button" color="black"  value="STUDENT UPDATE DETAILS" onclick="fun2()"/>
<script> function fun2() { window.location="Student_update.php"; } </script></br>

Click here for &nbsp&nbsp
<input type="button1" color="black"  value="LOG OUT" onclick="fun3()"/>
<script> function fun3() { window.location="Student_logout.php"; } </script></br>

</form>
</div>
</body>







<body background="white" ></body>

<?php
session_start();
if(!($_SESSION['usn']))
{
header("location: Student_login.php");
}
$con=mysqli_connect("localhost","root","","application");
mysqli_select_db($con,"application") or die("cannot connect to the database");






$usn= $_SESSION['usn'];
$query="select * from student where usn='$usn'";
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

<tr align='center' bgcolor='yellow'>
<td>   <?php echo $usn; ?></td>
<td>   <?php echo $sname; ?> </td>
<td>   <?php echo $sem; ?> </td>
<td>   <?php echo $branch; ?> </td>
<td>   <?php echo $phone; ?> </td>
<td>   <?php echo $email; ?> </td>
<td>   <?php echo $spassword; ?> </td>


</tr>




<?php  }
?>
</html>