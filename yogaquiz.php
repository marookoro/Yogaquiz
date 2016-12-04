<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
/*

// Create database - Uncomment IF statement to check
$sql = "CREATE DATABASE USERNAMES";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
*/
/*
// sql to create table - Uncomment IF statement to check
$sql = "CREATE TABLE Yogausernames (
Name VARCHAR(50) NOT NULL PRIMARY KEY
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Yogausernames created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
*/

//Checks form, selects data and puts them in a new table
if (isset($_POST['showdiary'])) {
    $sql = "SELECT * FROM Yogausernames";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row

echo "<table>
<tr>
    <th>ID</th>
    <th>Name</th>
</tr>";

     while($row = $result->fetch_assoc()) {
         echo "<tr>";
         echo "<td>".$row['id']."</td>";
         echo "<td>".$row['Name']."</td>";
         echo"</tr>";
     }
} else {
     echo "0 results";
	}

}

//Inserts data into the database when the button named "save" is clicked
if(isset($_POST['save'])) {
$sql = "INSERT INTO Yogausernames (Name)
VALUES ('$_POST[firstname]')";

if ($conn->query($sql) === TRUE) {
    echo "New User created successfully";
} else {
    echo "<script type='text/javascript'>alert('welcome back')</script>";
}

}


?>





<!DOCTYPE html>
<html>
<head>
<script>
 function Empty()
{

    if((firstname.value =='')){

		alert("no username entered");
                return false;
     }
  }
</script>
<meta charset = "UTF-8">
 
<title> Yoga Quiz </title>


<form name="nameform" method="post" >
<h4> Please enter your name before starting the quiz: </h4>
<ul><ul>
<li>Username:<input type = "text" name="firstname" id="firstname"></li><br>
</ul></ul>
<ul><ul>
<button class="submit" name="save" type="submit" onClick="return Empty()"><span>Save Username</span></button>
</ul></ul>
</form>
<form name="quiz1" method="post" action = "yogaquiz2.php">
<button class="quiz1" name="Go to quiz1" type="submit"><span> Go to quiz 1 (English)</span></button>
</form>
<form name="quiz2" method="post" action = "yogaquiz3.php">
<button class="quiz2" name="Go to quiz2" type="submit"><span> Go to quiz 2 (Sanskrit)</span></button>
</form>


</head>
</head>
<body>




</body>
</html>

<style>

body{

 background-color: #66ff33;


}
 .submit{

  display: inline-block;
  border-radius: 4px;
  background-color: #009900;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 21px;
  padding: 10px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

 .submit span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

 .submit span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

 .submit:hover span {
  padding-right: 25px;
}

 .submit:hover span:after {
  opacity: 1;
  right: 0;
}

.quiz1{

  display: inline-block;
  border-radius: 4px;
  background-color: #009900;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 21px;
  padding: 10px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  
}

 .quiz1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

 .quiz1 span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

 .quiz1:hover span {
  padding-right: 25px;
}

 .quiz1:hover span:after {
  opacity: 1;
  right: 0;
}


.quiz2{

  display: inline-block;
  border-radius: 4px;
  background-color: #009900;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 21px;
  padding: 10px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  
}

 .quiz2 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

 .quiz2 span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

 .quiz2:hover span {
  padding-right: 25px;
}

 .quiz2:hover span:after {
  opacity: 1;
  right: 0;
}


</style>


