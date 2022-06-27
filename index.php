<!DOCTYPE html>
<head>
    <title> Multi-dimensional Array
    </title>
</head>


<dody>


<?php
$name = array (
  array("Juan Dela Cruz","email1@testmail.com","18 y/o","address 1","street 1", "city 1","province 1", "country 1", 2404),
  array("Two Dela Cruz","email2@testmail.com","19 y/o","address 2","street 2", "city 2","province 2", "country 2", 2404),
  array("Juan Dela Cruz","email1@testmail.com","18 y/o","address 1","street 1", "city 1","province 1", "country 1", 2404),
  array("Juan Dela Cruz","email1@testmail.com","18 y/o","address 1","street 1", "city 1","province 1", "country 1", 2404),
);


foreach($name as $array){

echo $array[0]."</br>";
echo $array[1]."</br>";
echo $array[2]."</br>";
echo $array[3]."</br>";
echo $array[4]."</br>";
echo $array[5]."</br>";
echo $array[6]."</br>";
echo $array[7]."</br>";
echo $array[8]."</br></br>";

}

?>

</body>


</html>