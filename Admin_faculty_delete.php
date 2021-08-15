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

$sqldata1="select * from faculty";
$run=mysql_query($sqldata1);
?>

<form action="" method="post">
<table width='800' align='center border='5'>
<tr bgcolor ='blue'>
   <th> fid </th>
   <th>faculty name</th>
   <th>branch</th>
   <th>yoe</th>
   <th>phone</th>
   <th>email</th>
   <th>Password</th>
</tr>

<h1 align="center"> DELETE FACULTY INFORMATION</h1>
<?php
while ($row=mysql_fetch_array($run))
{
$fid=$row[0];
$fname=$row[1];
$branch=$row[2];
$yoe=$row[3];
$phone=$row[4];
$email=$row[5];
$password=$row[6];
?>

<tr align='center' bgcolor='cream'>
<td>   <?php echo $fid; ?></td>
<td>   <?php echo $fname; ?> </td>
<td>   <?php echo $branch; ?> </td>
<td>   <?php echo $yoe; ?> </td>
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
  
<label for="cid"><b>Enter the faculty ID:</b></label> 
<input placeholder="Enter the faculty ID" type="number" name="fid"/></br>
  
  <input type="submit" name="submit" value="SUBMIT"  /> 
  
<?php
if(isset($_POST['submit']))
{
 
$fid=$_POST['fid'];
$delete=mysql_query("delete from  faculty where fid='$fid'");
if($delete)
{
echo "<script> alert('Information deleted successfully')</script>";	
echo " <a href='Admin_faculty_view_details.php'>View result</a>"; 
}
else
{
	echo "<script> alert('Deletion not successful')</script>";	

}
}
?>





<a href="Admin_home.php"><h1>click here to goback</h1></a> 
</body>