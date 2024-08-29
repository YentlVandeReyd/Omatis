<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "omatis";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$file = fopen("cars.csv","r");
fgets($file);
while(! feof($file))
  {
//  print_r(fgetcsv($file));
  $row = fgetcsv($file);
//  print_r($row);
  foreach ($row as $data){
//      echo $data."<br>";
      $exploded_data = explode(";",$data);
      $team_name = $exploded_data[1];
      $classe = $exploded_data[2];
      $brand = $exploded_data[3];
      $model = $exploded_data[4];
      $startnummer = $exploded_data[5];
      $cc = $exploded_data[6];
      $transponder = $exploded_data[7];
      
      $opslaan_gegevens = $conn->prepare("INSERT INTO participants (teamname,classe,brand,model,startnummer,cc,transponder) VALUES (?,?,?,?,?,?,?)");
      $opslaan_gegevens->bind_param("ssssiss", $team_name,$classe,$brand,$model,$startnummer,$cc,$transponder);
      $opslaan_gegevens->execute();
      
  }
//  print_r(explode(";",$row));
  echo "<hr>";
  }

fclose($file);
?>