<!DOCTYPE html>
<head>
    <title> Multi-dimensional Array
    </title>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>


<dody>

<table>
<?php
$name = array (
  array("First Name","Last Name","Email","Age","Address","Street","City","Province","Country","Zip Code"), 	
  array("Juan","Dela Cruz","email1@testmail.com","18 y/o","address 1","street 1", "city 1","province 1", "country 1", 2404),
  array("Two","Dela Cruz","email2@testmail.com","19 y/o","address 2","street 2", "city 2","province 2", "country 2", 2404),
  array("Three","Dela Cruz","email3@testmail.com","20 y/o","address 3","street 3", "city 3","province 3", "country 3", 2404),
  array("Four","Dela Cruz","email4@testmail.com","21 y/o","address 4","street 4", "city 4","province 4", "country 4", 2404),
);


foreach($name as $array){
echo "<tr>";

echo "<th>".$array[0]."</th>";
echo "<th>".$array[1]."</th>";
echo "<th>".$array[2]."</th>";
echo "<th>".$array[3]."</th>";
echo "<th>".$array[4]."</th>";
echo "<th>".$array[5]."</th>";
echo "<th>".$array[6]."</th>";
echo "<th>".$array[7]."</th>";
echo "<th>".$array[8]."</th>";
echo "<th>".$array[9]."</th>";

echo "</tr>";	
}


?>
</table>

</body>


</html>