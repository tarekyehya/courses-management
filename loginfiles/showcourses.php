<?php
require "loginconnection.php";

$query = "SELECT student.name , student.e_mail ,courses.coursename , courses.price , courses.grade
from student,courses,relation where student.id=relation.studid AND courses.id=relation.coursid";
$result = mysqli_query($connect,$query);

echo "<head><link rel='stylesheet' href='showcourse.css'> </head>";
echo "<table>";
echo "<tr>";
echo "<td>studentname</td> <td>email</td> <td>coursename</td> <td>price</td> <td>grade</td>";
echo "</tr>";
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" .  $row["name"]       . "</td>";
    echo "<td>" .  $row["e_mail"]     . "</td>";
    echo "<td>" .  $row["coursename"] . "</td>";
    echo "<td>" .  $row["price"]      . "</td>";
    echo "<td>" .  $row["grade"]      . "<br>";
    echo "</tr>";
}
echo "</table>";
?>
