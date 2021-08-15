<?php
 include 'copyrights.php'; ?>


<!DOCTYPE html>
<html>
    <head>
        <title>PHP MySQL Stored Procedure Demo 1</title>
         <link rel="stylesheet" href="css/table.css" type="text/css" />
    </head>
    <body bgcolor='white'>
        <?php
     $host = 'localhost';
    $dbname = 'application';
    $username = 'root';
    $password = '';
$con=mysqli_connect("localhost","root","","application");

if (!$con)

{

die('Could not connect: ' . mysqli_error());

}

mysqli_select_db($con,"application");
print "<h2 align='center'><u>Creation of Stored Procedure that return a result set in PHP</u></h2>";
print "<h2 align='center'><font color='green'>PROCEDURE:</font><br/><font color='green'>CREATE PROCEDURE Getsol()<br/>BEGIN <br/>SELECT usn, sname,sem,branch,phone,email FROM student;<br/> END;</font></h2>";

$sql1 = "CREATE PROCEDURE Getsol()BEGIN SELECT sid,usn,sname,sem,branch,phone,email FROM student; 






END;";
mysqli_query($con,$sql1);

print "<h2 align='center'>Result from the above Stored Procedure</h2>";


$sql2 = 'CALL Getsol()';
$result1=mysqli_query($con,$sql2);
       // try {
           // $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            // execute the stored procedure
        
            // call the stored procedure
            //$q = $pdo->query($sql);
           // $q->setFetchMode(PDO::FETCH_ASSOC);
       // } catch (PDOException $e) {
           // die("Error occurred:" . $e->getMessage());
       // }
        ?>

        <table  align='center' border="7" width=400>
            <tr>
                <th>sid</th>
                <th>usn</th>
				 <th>sname</th>
                <th>sem</th>
				 <th>branch</th>
                <th>phone</th>
				 <th>email</th>
                
				
				
				
				
				
            </tr>
            <?php while ($r = mysqli_fetch_array($result1)): ?>
                <tr>
				     <td><?php echo $r['sid'] ?></td>
                    <td><?php echo $r['usn'] ?></td>
					 <td><?php echo $r['sname'] ?></td>
                    <td><?php echo $r['sem'] ?></td>
					 <td><?php echo $r['branch'] ?></td>
                    <td><?php echo $r['phone'] ?></td>
					
                    <td><?php echo $r['email']?>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </body>
</html>    
<a href="Index.php"><h1>Click here to Go Back</h1></a>