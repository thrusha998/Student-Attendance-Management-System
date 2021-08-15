



<html>
<head>
<title>Admin View Details</title>

</head>

<style>

div {
    height: 300px;
    width: 550px;
	position:absolute;
    top: 300px;
    right: 450px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    background-color: #f2f2f2;
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
	
	input[type=button1] {
    width: 25%;
	position:right;
    background-color: grey;
    color: white;
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
	
	
	
	div 
	{
   	position:absolute;
    right:150px;
    padding:10px;
	font-weight:bold;
	}

</style>
<body background="" style="background-color:white"></body>
<form action="" method="post">
<table width='800' align='center border='5'>
<tr bgcolor ='blue'>
 
   <th>Admin Name</th>
   <th>Admin Password</th>
   <th>Admin Email</th>
   

</tr>
<div>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="Admin_home.php"; } </script></br>


Click here for &nbsp&nbsp
<input type="button1" color="black"  value="LOG OUT" onclick="fun2()"/>
<script> function fun2() { window.location="Admin_logout.php"; } </script></br>


Click here for &nbsp&nbsp
<input type="button" color="black"  value="UPDATE DETAILS" onclick="fun3()"/>
<script> function fun3() { window.location="Admin_update.php"; } </script></br>


</form>
</div>
</body>








<?php
session_start();
if(!($_SESSION['name']))
{
header("location: Admin_login.php");
}
$con=mysqli_connect("localhost","root","","application");
mysqli_select_db($con,"application") or die("cannot connect to the database");
$name= $_SESSION['name'];
$query="select * from admin";
$run=mysqli_query($con,$query);

while ($row=mysqli_fetch_array($run))
{
$name=$row[1];
$password=$row[2];
$email=$row[3];

?>

<tr align='center' bgcolor='cream'>
<td>   <?php echo $name; ?></td>
<td>   <?php echo $password; ?> </td>
<td>   <?php echo $email; ?> </td>


</tr>

<?php  }
?>
</html>