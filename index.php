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

/* $name = array (
  array("First Name","Last Name","Email","Age","Address","Street","City","Province","Country","Zip Code"), 	
  array("Juan","Dela Cruz","email1@testmail.com","18 y/o","address 1","street 1", "city 1","province 1", "country 1", 2404),
  array("Two","Dela Cruz","email2@testmail.com","19 y/o","address 2","street 2", "city 2","province 2", "country 2", 2404),
  array("Three","Dela Cruz","email3@testmail.com","20 y/o","address 3","street 3", "city 3","province 3", "country 3", 2404),
  array("Four","Dela Cruz","email4@testmail.com","21 y/o","address 4","street 4", "city 4","province 4", "country 4", 2404),
);
*/

$persons = [

[
'firstname'=>'First Name :',
'lastname'=>'Last Name :',
'email'=>'Email :',
'age'=>'Age :',
'address'=> [
'street'=> 'Street :',
'city'=> 'City :',
'province'=>'Province :',
'country'=>'Country :',
'zip_code'=>'Zip Code :'
]
], 

[

'firstname'=>'Benzar',
'lastname'=>'Dela Cruz',
'email'=>'benzar@virtual-wonders.com',
'age'=>'24 y/o',
'address'=> [
'street'=> 'Palali Street',
'city'=> 'Alaminos City',
'province'=>'Pangasinan',
'country'=>'Philippines',
'zip_code'=>'2404'
]
],
[

'firstname'=>'Benzar01',
'lastname'=>'Dela Cruz01',
'email'=> 'benzar@virtual-wonders01',
'age'=>'25 y/o',
'address'=> [
'street'=> 'Palali Street01',
'city'=> 'Alaminos City01',
'province'=>'Pangasinan01',
'country'=>'Philippines01',
'zip_code'=>'2404'
]
],



];

foreach($persons as $array){
echo "<tr>";

echo "<th>".$array['firstname']."</th>";
echo "<th>".$array['lastname']."</th>";
echo "<th>".$array['email']."</th>";
echo "<th>".$array['age']."</th>";
echo "<th>".$array['address']['street']."</th>";
echo "<th>".$array['address']['city']."</th>";
echo "<th>".$array['address']['province']."</th>";
echo "<th>".$array['address']['country']."</th>";
echo "<th>".$array['address']['zip_code']."</th>";

echo "</tr>";	
}











?>
</table>

</body>


</html>