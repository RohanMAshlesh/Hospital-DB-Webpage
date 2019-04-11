<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$key = "passw";
$DB = "hms";
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT id from patients';
mysql_select_db('hms');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
echo "hello";

$query = " SELECT id, aes_decrypt(name, 'passw') AS name, aes_decrypt(age, 'passw') AS age, aes_decrypt(gender, 'passw') AS gender FROM patients ";
$resultSet = mysql_query($query, $DB);
while ($row = mysql_fetch_array($resultSet)) {
    $id = $row['id'];
    $rows[] = $row["Request"];
    $name = $row["name"];
    $age = $row["age"];
    $gender = $row["gender"];
}    


mysql_close($conn);
?>

<!-- 
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))

## SELECT id, aes_decrypt(name, 'passw') AS name, aes_decrypt(age, 'passw') AS age, aes_decrypt(gender, 'passw') AS gender FROM patients
{
    echo "PATIENT ID :{$row['id']}  <br> ".         
         "NAME       : {$row['name']} <br> ".
         "AGE        : {$row['age']} <br> ".
         "GENDER     : {$row['gender']} <br> ".
         "OCCUPATION : {$row['occupation']} <br> ".
         "MOBILE     : {$row['mobile']} <br> ".
         "ADDRESS    : {$row['address']} <br> ".
         "--------------------------------<br>";
} 
## $sql= AES_DECRYPT($sql1,'passw');




$query = " SELECT id, aes_decrypt(Column1, '$key') AS Column1, aes_decrypt(Column2, '$key') AS Column2 FROM parent WHERE Request = '{$Request}' ORDER BY ID ASC;";
$resultSet = mysql_query($query, $DB);
while ($row = mysql_fetch_array($resultSet)) {
    $id = $row['ID'];
    $rows[] = $row["Request"];
    $Column1 = $row["Column1"];
    $Column2 = $row["Column2"];






 -->