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

$id = $_GET['id'];
$actie = $_GET['actie'];
if($actie == ""){
    $actie = $_POST['actie'];
    $id = $_POST['id'];
}

if($actie == "verwijder"){
    $verwijder_deelnemer = $conn->prepare("UPDATE participants SET actief='0' WHERE id=?");
    $verwijder_deelnemer->bind_param("i", $id);
    $verwijder_deelnemer->execute();
}

if($actie == "duplicate"){
    $duplicate_deelnemer = $conn->prepare("INSERT INTO participants (teamname,classe,brand,model,startnummer,cc,transponder) SELECT teamname,classe,brand,model,startnummer,cc,transponder FROM participants WHERE id=?");
    $duplicate_deelnemer->bind_param("i", $id);
    $duplicate_deelnemer->execute();
}

if($actie == "edit"){ 
    $update_deelnemer = $conn->prepare("UPDATE participants SET teamname=?,classe=?,brand=?,model=?,startnummer=?,cc=?,transponder=? WHERE id=?");
    $update_deelnemer->bind_param("ssssissi", $_POST['teamname'],$_POST['classe'],$_POST['brand'],$_POST['model'],$_POST['startnummer'],$_POST['cc'],$_POST['transponder'],$id);
    $update_deelnemer->execute();
    
    echo "<script>window.location.href = 'index.php';</script>";
}

if($actie == "nieuw"){ 
    $nieuwe_deelnemer = $conn->prepare("INSERT INTO participants (teamname,classe,brand,model,startnummer,cc,transponder) VALUES (?,?,?,?,?,?,?)");
    $nieuwe_deelnemer->bind_param("ssssiss", $_POST['teamname'],$_POST['classe'],$_POST['brand'],$_POST['model'],$_POST['startnummer'],$_POST['cc'],$_POST['transponder']);
    $nieuwe_deelnemer->execute();
    
    echo "<script>window.location.href = 'index.php';</script>";
}
?>
