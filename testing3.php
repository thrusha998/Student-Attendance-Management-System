<?php
 include 'copyrights.php'; ?>

        
<html>	
<table align="center" border="1" bgcolor="cream">
<tr><th colspan="9">Today Attendance</th></tr>
<tr>
<?php

session_start();
$con=mysqli_connect("localhost","root","","application");
mysqli_select_db($con,"application") or die("cannot connect to the database");
		

$subject=$_GET['subject'];
echo "<th colspan='3'> subject:".$subject."</th>";


date_default_timezone_set('Asia/Kolkata');
$currentDate = date( 'Y-m-d ', time () );

echo "<th colspan='3'>Date:".$currentDate."</th>";


$currentTime = date( ' h:i:s ', time () );
echo "<th colspan='3'>Time:".$currentTime."</th></tr>";
echo "<tr> <th> SID</th> <th> USN </th> <th> SNAME </th> <th> SEM </th> <th> BRANCH </th> <th> ATTENDANCE STUTUS</th></tr>";

$query1="select *from student where sem=3";

$run=mysqli_query($con,$query1);
while ($row=mysqli_fetch_array($run))
{
 $sid=$row[0];
$usn=$row[1];
$sname=$row[2];
$sem=$row[3];
$branch=$row[4];


$found=0;
foreach($_GET['attendence'] as $checkbox)

{

if($sid==$checkbox)
$found=1;
}



if($found==1)

{
	$entry=1;
$query2= "insert into attendance1(sid,usn,sname,sem,branch,subject,dat,time,entry) values ($sid,'$usn','$sname',$sem,'$branch','$subject','$currentDate','$currentTime',$entry)";

echo "<tr> <th> '$sid'</th> <th> '$usn' </th> <th> '$sname' </th> <th> '$sem' </th> <th> '$branch' </th> <th>'1'</th></tr>";


$con=mysqli_connect("localhost","root","","application");
mysqli_select_db($con,"application") or die("cannot connect to the database");
	

mysqli_query($con,$query2);


}

else
{
	$entry=0;
$query3= "insert into attendance1(sid,usn,sname,sem,branch,subject,dat,time,entry) values ($sid,'$usn','$sname',$sem,'$branch','$subject','$currentDate','$currentTime',$entry)";

$con=mysqli_connect("localhost","root","","application");
mysqli_select_db($con,"application") or die("cannot connect to the database");
	

mysqli_query($con,$query3);
echo "<tr> <th> '$sid'</th> <th> '$usn' </th> <th> '$sname' </th> <th> '$sem' </th> <th> '$branch' </th> <th>'0'</th></tr>";
}
}
?>
  <a href="Mark_attendance3.php"><h1>Click here to Go Back</h1></a>                        