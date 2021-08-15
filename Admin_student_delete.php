<?php
 include 'copyrights.php'; ?>


<?php 
session_start();
if(!($_SESSION['name']))
{
header("location: Admin_delete.php");
}
mysql_connect("localhost","root","","application");
mysql_select_db("application") or die("cannot connect to the database");

$sqldata1="select * from student";
$run=mysql_query($sqldata1);
?>

<form action="" method="post">
<table width='800' align='center border='5'>
<tr bgcolor ='blue'>
   <th> Usn </th>
   <th>Student name</th>
   <th>Sem</th>
   <th>Branch</th>
   
   <th>Phone</th>
   <th>email</th>
   <th>Password</th>
</tr>

<h1 align="center"> DELETE STUDENT INFORMATION</h1>
<?php
while ($row=mysql_fetch_array($run))
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

<?php  }
?>
</table>

<div>
<body background="" style="background-color:white"></body>
<form method="post" action="">  
  
<label for="usn"><b>Enter the student usn:</b></label> 
<input placeholder="Enter the student usn" type="text" name="usn"/></br>
  
  <input type="submit" name="submit" value="SUBMIT"  /> 
  
<?php
if(isset($_POST['submit']))
{
 
$usn=$_POST['usn'];
$delete=mysql_query("delete from  student where usn='$usn'");
if($delete)
{
echo "<script> alert('Information deleted successfully')</script>";	
echo " <a href='Admin_student_view_details.php'>View result</a>"; 
}
else
{
	echo "<script> alert('Deletion not successful')</script>";	

}
}
?>





<a href="Admin_home.php"><h1>click here to goback</h1></a> 
</body>