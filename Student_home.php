
<?php
 include 'copyrights.php'; ?>

<?php
session_start();
?>
<html>
<?php
if(!($_SESSION['usn']))
{
header("location: Student_login.php");
}
?>


<html>
<head>
<title>HOME</title>
</head>
<marquee behavior="scroll" direction="left"><font color="purple" size="6"><b><strong>WELCOME TO THE HOME PAGE..!</strong></b></font></marquee>

<style>

body {
  background:
     url(image/image.jpg)    /* image */
     left center / 600px 700px /* position / size */
     no-repeat                /* repeat */
     fixed                    /* attachment */
     padding-box              /* origin */
     content-box              /* clip */
     white;                     /* color */
}
input[type=submit] {
    width: 200%;
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

input[type=submit]:hover{
background-color: #4CAF50;
    border: none;
    color: black;
	}
	
	div 
	{
   	position:absolute;
    right:750px;
    padding:10px;
	font-weight:bold;
	}
	
	
	input[type=submit1] {
    width: 200%;
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

input[type=submit1]:hover{
background-color: #FF0000;
    border: none;
    color: black;
	}
	
	div 
	{
   	position:absolute;
    right:750px;
    padding:10px;
	font-weight:bold;
	}
	
</style>


<body>

<div>
<a href="Student_view_details.php" font face="verdana"><input type="submit" color="black"  value="VIEW DETAILS"></br>
<a href="Student_update.php" font face="verdana"><br><input type="submit" color="black"  value="UPDATE DETAILS"></br>

<a href="Student_logout.php" font face="verdana"><br><input type="submit1" color="black" align="center" value="LOGOUT" style="text-align:center;"></br>

</div>
</body>
</html>
