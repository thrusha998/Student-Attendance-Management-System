
        
		
<?php
session_start();
$con=mysqli_connect("localhost","root","","application1");
mysqli_select_db($con,"application1") or die("cannot connect to the database");
		
		
?>		
		
		
		
		
		
		
<?php
$subject=$_GET['subject'];
echo $subject;
$date=date("yyyy-mm-dd");
echo $date;
$time=currtime;
foreach($_GET['attendence'] as $checkbox)

{
echo $checkbox;
select sid ,usn, sname from student where sid=$checkbox;

while ($row=mysqli_fetch_array($run))
{
$sid=$row[0];
$usn=$row[1];
$sname=$row[2];

  <tr align="right" bgcolor='white'>
  <td>   <?php echo $sid; ?></td>
<td>   <?php echo $usn; ?></td>
<td>   <?php echo $sname; ?> </td>


</tr>

?>

$query= "insert into student(usn,sname,sem,branch,phone,email,spassword) values ('$usn','$sname','$sem','$branch','$phone','$email','$spassword')";

}
?>
                          