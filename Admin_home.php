
<?php
session_start();
?>
<html>
<?php
if(!($_SESSION['name']))
{
header("location: Admin_login.php");
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
<body background="" style="background-color:White"></body>

<body>

<div>
<a href="Admin_view_details.php" font face="verdana"><input type="submit" color="black"  value="VIEW DETAILS"></br>
<a href="Admin_update.php" font face="verdana"><br><input type="submit" color="black"  value="ADMIN UPDATE" style="text-align:center";></br>
<a href="Admin_Student_view_details.php" font face="verdana"><br><input type="submit" color="black"  value="VIEW STUDENT DETAILS" style="text-align:center";></br>
<a href="Admin_Faculty_view_details.php" font face="verdana"><br><input type="submit" color="black"  value="VIEW FACULTY DETAILS" style="text-align:center"; ></br>
<a href="Admin_Student_update.php" font face="verdana"><br><input type="submit" color="black"  value="STUDENT UPDATE" style="text-align:center";></br>
<a href="Admin_Faculty_update.php" font face="verdana"><br><input type="submit" color="black"  value="FACULTY UPDATE" style="text-align:center";></br>
<a href="Admin_student_search.php" font face="verdana"><br><input type="submit" color="black"  value="STUDENT SEARCH" style="text-align:center";></br>
<a href="Admin_faculty_search.php" font face="verdana"><br><input type="submit" color="black"  value="FACULTY SEARCH" style="text-align:center";></br>
<a href="admin_delete_attendance.php" font face="verdana"><br><input type="submit" color="black"  value="DELETE ATTENDANCE" style="text-align:center"; ></br>
<a href="Admin_student_delete.php" font face="verdana"><br><input type="submit1" color="black"  value="DELETE STUDENT" style="text-align:center";></br>
<a href="Admin_faculty_delete.php" font face="verdana"><br><input type="submit1" color="black"  value="DELETE FACULTY" style="text-align:center";></br>
<a href="Admin_logout.php" font face="verdana"><br><input type="submit1" color="black"  value="LOGOUT" style="text-align:center";></br>
</div>
</body>
</html>
