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
   <th> sid</th>
   <th>usn</th>
   <th>sname</th>
   <th>sem</th>
   <th>branch</th>
   <th>subject</th>
   <th>date</th>
 <th>time</th>
<th>entry</th>

</tr>
<div>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="ADMIN HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="Admin_home.php"; } </script></br>






</form>
</div>
</body>







<body background="white" ></body>

<?php
session_start();
if(!($_SESSION['name']))
{
header("location: Admin_login.php");
}
$con=mysqli_connect("localhost","root","","application");
mysqli_select_db($con,"application") or die("cannot connect to the database");





$sem=$_GET['sem'];
$name= $_SESSION['name'];
$query="select * from attendance1 where sem=$sem ";
$run=mysqli_query($con,$query);




while ($row=mysqli_fetch_array($run))
{
$sid=$row[1];	
$usn=$row[2];
$sname=$row[3];
$sem=$row[4];
$branch=$row[5];
$subject=$row[6];
$date=$row[7];
$time=$row[8];
$entry=$row[9];
?>

<tr align='center' bgcolor='yellow'>
<td>   <?php echo $sid; ?></td>
<td>   <?php echo $usn; ?></td>
<td>   <?php echo $sname; ?> </td>
<td>   <?php echo $sem; ?> </td>
<td>   <?php echo $branch; ?> </td>
<td>   <?php echo $subject; ?> </td>
<td>   <?php echo $date; ?> </td>
<td>   <?php echo $time; ?> </td>
<td>   <?php echo $entry; ?></td>

</tr>




<?php  }
?>
</html>