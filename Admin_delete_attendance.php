<?php
 include 'copyrights.php'; ?>


<?php 
session_start();
if(!($_SESSION['name']))
{
header("location: Admin_home.php");
}
mysql_connect("localhost","root","","application");
mysql_select_db("application") or die("cannot connect to the database");

$sqldata1="select * from attendance1";
$run=mysql_query($sqldata1);
?>

<form action="" method="post">
<table width='800' align='center border='5'>
<tr bgcolor ='blue'>
   <th> sid </th>
   <th>usn</th>
   <th>sname</th>
   <th>sem</th>
   
   <th>branch</th>
   <th>subject</th>
   <th>date</th>
   <th>time</th>
   <th>entry</th>
   
</tr>

<h1 align="center"> DELETE ATTENDANCE INFORMATION</h1>
<?php
while ($row=mysql_fetch_array($run))
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

<tr align='center' bgcolor='cream'>
<td>   <?php echo $sid; ?></td>
<td>   <?php echo $usn; ?> </td>
<td>   <?php echo $sname; ?> </td>
<td>   <?php echo $sem; ?> </td>
<td>   <?php echo $branch; ?> </td>
<td>   <?php echo $subject; ?> </td>
<td>   <?php echo $date; ?> </td>
<td>   <?php echo $time; ?> </td>
<td>   <?php echo $entry; ?> </td>
</tr>

<?php  }
?>
</table>

<div>
<body background="" style="background-color:white"></body>
<form method="post" action="">  
  
<label for="usn"><b>Enter the student usn:</b></label> 
<input placeholder="Enter the student usn" type="text" name="usn"/></br>
  
  
<label for="sem"><b>Enter the student sem:</b></label> 
<input placeholder="Enter the student sem" type="number" name="sem"/></br>
    
  
  
<label for="date"><b>Enter the date:</b></label> 
<input placeholder="Enter the date" type="date" name="date"/></br>
    
  
  
  
  
  
  <input type="submit" name="submit" value="SUBMIT"  /> 
  
<?php
if(isset($_POST['submit']))
{
 
$usn=$_POST['usn'];
$sem=$_POST['sem'];
$date=$_POST['date'];
$delete=mysql_query("delete from  attendance1 where usn='$usn' and sem=$sem and dat='$date' ");
if($delete)
{
echo "<script> alert('Information deleted successfully')</script>";	
echo " <a href='Admin_attendance_view_details.php?sem=$sem'>View result</a>"; 
}
else
{
	echo "<script> alert('Deletion not successful')</script>";	

}
}
?>





<a href="Admin_home.php"><h1>click here to goback</h1></a> 
</body>