<?php

$connect = new PDO("mysql:host=localhost;dbname=db", "root", "");

if(isset($_POST["type"]))
{
 if($_POST["type"] == "category_data")
 {
  $query = "
SELECT * FROM business_type 
ORDER BY bustype_name ASC
  ";
  $statement = $connect->prepare($query);
  $statement->execute();
  $data = $statement->fetchAll();
  foreach($data as $row)
  {
   $output[] = array(
    'id'  => $row["bustype_id"],
    'name'  => $row["bustype_name"]
   );
  }
  echo json_encode($output);
 }
 else
 {
  $query = "
  SELECT * FROM business_table 
  WHERE bustype_id = '".$_POST["category_id"]."' 
  ORDER BY bus_name ASC
  ";
  $statement = $connect->prepare($query);
  $statement->execute();
  $data = $statement->fetchAll();
  foreach($data as $row)
  {
   $output[] = array(
    'id'  => $row["bus_id"],
    'name'  => $row["bus_name"]
   );
  }
  echo json_encode($output);
 }
}

?>