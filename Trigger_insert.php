

<?php

$con=mysqli_connect("localhost","root","","application");

if (!$con)

{

die('Could not connect: ' . mysqli_error());

}

mysqli_select_db($con,"application");
print "<h2 align='center'>CREATION of MySQL Trigger In PHP</h2>";
print "<h4 align='center'>STUDENT TABLE CONTENT</h4>";
$result = mysqli_query($con,"select * from student");

echo "<table border='1' align='center'>

<tr>

<th>sid</th>
<th>usn</th>
<th>sname</th>
<th>sem</th>

<th>branch</th>
<th>phone</th>
<th>email</th>
<th>spassword</th>






</tr>";

while($row = mysqli_fetch_array($result))

{

echo "<tr>";

echo "<td>" . $row['sid'] . "</td>";
echo "<td>" . $row['usn'] . "</td>";
echo "<td>" . $row['sname'] . "</td>";
echo "<td>" . $row['sem'] . "</td>";

echo "<td>" . $row['branch'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['spassword'] . "</td>";


echo "</tr>";

}

echo "</table>";
print "<h4 align='center'> VISITED TABLE CONTENT </h4>";
$query1= "select * from total_students";
$result1 = mysqli_query($con,$query1);


echo "<table border='1' align='center'>

<tr>





<th>branch</th>
<th>total_no_students</th>

</tr>";

while($row = mysqli_fetch_array($result1))

{

echo "<tr>";




echo "<td>" . $row['branch'] . "</td>";
echo "<td>" . $row['total_no_students'] . "</td>";

echo "</tr>";

}

echo "</table>";



if( isset($_POST['submit']) )
	{
		
		$usn = $_POST['usn'];
		$sname = $_POST['sname'];
		$sem = $_POST['sem'];
		$branch = $_POST['branch'];
		$phone = $_POST['phone'];
		$email= $_POST['email'];
		$spassword = $_POST['spassword'];
		
		
	$query= "insert into student(usn,sname,sem,branch,phone,email,spassword) values ('$usn','$sname','$sem','$branch','$phone','$email','$spassword')";

if(mysqli_query($con,$query))
{

echo "<script> alert('Student is Succussfully registered')</script>";


}


	}
	
 
?>
<style>
<style>
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


input[type=number], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=number]:focus {
    border: 1px solid #555;
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



input[type=password], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=password]:focus {
    border: 1px solid #555;
}
	input[type=button] {
    width: 50%;
	position:right;
	font-weight:bold;
    background-color: white;
    color: white;
    padding: 5px 10px;
    margin: 8px 0;
    border: none;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}
	
	input[type=button]:hover{
background-color: white;
    border: none;
    color: black;
	}
	
div {
    height: 500px;
    width: 400px;
	position:left;
    top: 80px;
    right: 150px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    background-color: #f2f2f2;
    padding: 20px;
}
input[type=submit] {
    width: 30%;
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
input[type=reset] {
    width: 30%;
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

input[type=reset]:hover{
background-color: #4CAF50;
    border: none;
    color: black;
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

</style>
<style>
body 
{

    background-image: url("depositphotos_77731292-stock-illustration-medicine-brochure-cover-page-blue.jpg");
    background-color:white;
    background-position: center;
    background-size: cover;
    height: 500px;
    width:500px;;
    
}

</style>
<body>

<div>


<form method="post" action="">

<label for="usn"><b>usn:</b></label> 
<input placeholder="Enter your sid" type="text" name="usn" /></br>

<label for="sname"><b>sname:</b></label> 
<input placeholder="Enter the name" type="text" name="sname" /></br>

<label for="sem"><b>sem:</b></label> 
<input placeholder="Enter the sem" type="text" name="sem"  /></br>

<label for="branch"><b>branch:</b></label> 
<input placeholder="Enter your branch" type="text" name="branch" /></br>



<label for="phone"><b>phone:</b></label> 
<input placeholder="Enter your phone number" type="number" name="phone" /></br>

<label for="email"><b>email:</b></label> 
<input placeholder="Enter your email id" type="email" name="email" /></br>

<label for="spassword"><b>spassword:</b></label> 
<input placeholder="Enter your password" type="password" name="spassword" /></br>


&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="reset" name="reset" value="RESET"  /> </br>

</form>

<?php


print "<h4 align='center'> TOTAL STUDENTS </h4>";
$result = mysqli_query($con,"select * from student");

echo "<table border='1' align='center'>

<tr>

<th>sid</th>
<th>usn</th>
<th>sname</th>
<th>sem</th>

<th>branch</th>
<th>phone</th>

<th>email</th>
<th>spassword</th>


</tr>";



while($row = mysqli_fetch_array($result))

{

echo "<tr>";
echo "<td>" . $row['sid'] . "</td>";
echo "<td>" . $row['usn'] . "</td>";
echo "<td>" . $row['sname'] . "</td>";
echo "<td>" . $row['sem'] . "</td>";

echo "<td>" . $row['branch'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['spassword'] . "</td>";

echo "</tr>";

}

echo "</table>";
print "<h4 align='center'>total no of students</h4>";

$result1 = mysqli_query($con,"select * from total_students");

echo "<table border='1' align='center'>

<tr>



<th>total_id</th>

<th>branch</th>
<th>total_no_students</th>

</tr>";

while($row = mysqli_fetch_array($result1))
{

echo "<tr>";

echo "<td>" . $row['total_id'] . "</td>";
echo "<td>" . $row['branch'] . "</td>";
echo "<td>" . $row['total_no_students'] . "</td>";

echo "</tr>";

}

echo "</table>";

mysqli_close($con);
print "</body>";

?>
<a href="Index.php"><h1>Click here to Go Back</h1></a>