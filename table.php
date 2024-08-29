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


    $classes_array = array();
    $ophalen_classes = $conn->prepare("SELECT DISTINCT classe FROM participants");
    $ophalen_classes->execute();
    $result_classes = $ophalen_classes->get_result();
    while($data_classes = $result_classes->fetch_assoc()){
        $classe = $data_classes['classe'];
        array_push($classes_array, $classe);
    }
    
    $ophalen_classes->close();
    
    foreach ($classes_array as $classe){
        echo "<h2>".$classe."</h2>";
            echo '<table id="table">';
            echo '<thead>';
                echo '<th>#</th>';
                echo '<th>Team name</th>';
                echo '<th>Car</th>';
                echo '<th>CC</th>';
                echo '<th>Transponder</th>';
                echo '<th></th>';
            echo '</thead>';
            echo '<tbody>';

            $ophalen_deelnemers_per_classe = $conn->prepare("SELECT * FROM participants WHERE classe=? AND actief='1'");
            $ophalen_deelnemers_per_classe->bind_param("s", $classe);
            $ophalen_deelnemers_per_classe->execute();
            $result_deelnemers_per_classe = $ophalen_deelnemers_per_classe->get_result();
            while($data_deelnemers_per_classe = $result_deelnemers_per_classe->fetch_assoc()){

                echo '<tr>';
                echo '<td width="50">'.$data_deelnemers_per_classe["startnummer"].'</td>';
                echo '<td width="200">'.$data_deelnemers_per_classe["teamname"].'</td>';
                echo '<td width="200">'.$data_deelnemers_per_classe["brand"].' '.$data_deelnemers_per_classe["model"].'</td>';
                echo '<td width="100">'.$data_deelnemers_per_classe["cc"].'</td>';
                echo '<td width="100">'.$data_deelnemers_per_classe["transponder"].'</td>';
                echo '<td width="200"><a class="btn btn-light" href="edit.php?id='.$data_deelnemers_per_classe["id"].'&actie=edit">EDIT</a> <button class="btn btn-light" onclick="verwijder('.$data_deelnemers_per_classe["id"].')">DELETE</button> <button class="btn btn-light" onclick="duplicate('.$data_deelnemers_per_classe["id"].')">DUPLICATE</button></td>';
                echo '</tr>';

            }
            
            $ophalen_deelnemers_per_classe->close();

            echo '</tbody>';
        echo '</table>';
    }
    ?>
