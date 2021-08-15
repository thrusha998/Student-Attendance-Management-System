<?php
 include 'copyrights.php'; ?>

<style type='text/css'>
body { 
background : url("fsrc.jpg");
background-repeat:no-repeat;
 background-size: 100%;

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
background-color: red;
    border: none;
    color: black;
	}
	
div {
    height: 550px;
    width: 450px;
	position:absolute;
    top: 80px;
    right: 100px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    background-color: #f2f2f2;
    padding: 20px;
}

</style>
<marquee behavior="scroll" direction="left"><font color="purple" size="6"><b><strong>WELCOME TO THE SEARCH PAGE..!</strong></b></font></marquee>
<body background="" style="background-color:white"></body>

<div>
<form action="Admin_student_search.php" method="get"><br/><br/>

<b>Search for the Student Usn here: </b><input type="text" name="value" placeholder="Search here" style="width:150px;height:35px;font:bold 15px Times New Roman;">&nbsp &nbsp
<input type="submit" name="search" value="Search Now" style="width:100px;height:35px;font:bold 15px Times New Roman;"></br>


Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOGOUT" onclick="fun3()"/>
<script> function fun3() { window.location="Admin_logout.php"; } </script></br>
</div>



</form>




</body>
</html>

<?php
session_start();

if(!($_SESSION['name']))
{
header("location: Admin_login.php");
}

$con=mysqli_connect("localhost","root","","application");
mysqli_select_db($con,"application") or die("cannot connect to the database");
if(isset($_GET['search']))
{
$search_value=$_GET['value'];
$query="select * from student where usn like '$search_value%'";

$run = mysqli_query($con,$query);
if(mysqli_num_rows($run)== 0)
{
echo "<script> alert('Entered User not found') </script>";
exit();
}
else
{
	
?>

<table width='800' align='center border='5'>
<tr bgcolor ='blue'>
   <th> usn </th>
   <th>Student name</th>
   <th>sem</th>
   <th>branch</th>
   <th>Phone</th>
   <th>Email</th>
   <th>Password</th>
   </tr>
<?php

while($row=mysqli_fetch_array($run))
{
$usn=$row[1];
$sname=$row[2];
$sem=$row[3];
$branch=$row[4];
$phone=$row[5];
$email=$row[6];
$password=$row[7];

?>


<tr align='center' bgcolor='cream'>
<td>   <?php echo $usn; ?></td>
<td>   <?php echo $sname; ?> </td>
<td>   <?php echo $sem; ?> </td>
<td>   <?php echo $branch; ?> </td>
<td>   <?php echo $phone; ?> </td>
<td>   <?php echo $email; ?> </td>
<td>   <?php echo $password; ?> </td>


</tr>

<?php
}
}
}
?>
</html>
