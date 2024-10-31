<html>
<body>
<table>
    <th>Name</th>
    <th>AGE</th>
    <th>Action</th>
<?php
include "connect.php";


$q="select * from student";
$result = $connection->query($q);

while($row=$result->fetch_assoc()){
    echo"<tr>
    <td>$row[name]</td>
    <td>$row[id]</td>
    </tr>";
}

?>

</table>
</body>
</html>