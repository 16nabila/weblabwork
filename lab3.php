<html>
<body>

<h2>WEB LAB</h2>

<div>
    <form method="POST">
        <label>Student Name: </label><br>
        <input type="text" name="sname" value=""><br>
        <label>Student ID: </label><br>
        <input type="number" name="sid" value=""><br>
        <br>
        <input type="submit" name="sub" value="Submit">
    </form>
</div>


</body>


<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="lab15";

$connection= new mysqli($dbhost,$dbuser,$dbpass,$dbname);

//insert
if (isset($_POST['sub'])){
$name = $_POST['sname'];
$id = $_POST['sid'];

$insertQ="insert into student (name,id) values('$name',$id)";

$result=$connection->query($insertQ);
//result = $con->query ("insert into student")
}
?>


</html>