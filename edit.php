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
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
    body{
        background-color: #1D1D1B;
        color: white;
    }
    h2{
        color:#FFD300;
        margin-bottom: 0px;
    }
    #table{
        border-style: solid;
        border-color: #D51317;
        border-radius: 15px;
        width: 90%;
        border-collapse: separate;
        margin-bottom: 20px;
        padding: 10px;
    }
    #table thead th{
        text-align: left;
        border-bottom: 1px solid #fff;
        padding-bottom: 5px;
    }
</style>

<?php 
if($_GET['actie'] == "edit"){
$id = $_GET['id'];
$ophalen_deelnemer = $conn->prepare("SELECT * FROM participants WHERE id=?");
$ophalen_deelnemer->bind_param("i", $id);
$ophalen_deelnemer->execute();
$result_deelnemer = $ophalen_deelnemer->get_result();
$data_deelnemer = $result_deelnemer->fetch_assoc();
}
?>

<body>
    <div class="container">
        <form action="crud.php" method="POST" id="edit_form">
        <div class="row">
            <div class="col-md-4">Team name: <input class="form-control" name="teamname" type="text" value="<?php if($_GET['actie'] == "edit"){echo $data_deelnemer['teamname'];} ?>"></div>
                <div class="col-md-4">Classe: <select class="form-control" name="classe">
                        <option value="TA" <?php if($_GET['actie'] == "edit" && $data_deelnemer['classe'] == "TA"){echo "selected";} ?>>TA</option>
                        <option value="TC" <?php if($_GET['actie'] == "edit" && $data_deelnemer['classe'] == "TC"){echo "selected";} ?>>TC</option>
                        <option value="TB" <?php if($_GET['actie'] == "edit" && $data_deelnemer['classe'] == "TB"){echo "selected";} ?>>TB</option>
                        <option value="GTA" <?php if($_GET['actie'] == "edit" && $data_deelnemer['classe'] == "GTA"){echo "selected";} ?>>GTA</option>
                        <option value="GTB" <?php if($_GET['actie'] == "edit" && $data_deelnemer['classe'] == "GTB"){echo "selected";} ?>>GTB</option>
                </select></div>
            <!--<div class="col-md-4">Classe: <input class="form-control" name="classe" type="text" value="<?php if($_GET['actie'] == "edit"){echo $data_deelnemer['classe'];} ?>"></div>-->
            <div class="col-md-4">Transponder: <input class="form-control" name="transponder" type="text" value="<?php if($_GET['actie'] == "edit"){echo $data_deelnemer['transponder'];} ?>"></div>
        </div>
        <div class="row">
            <div class="col-md-4">Brand: <input class="form-control" name="brand" type="text" value="<?php if($_GET['actie'] == "edit"){echo $data_deelnemer['brand'];} ?>"></div>
            <div class="col-md-4">Model: <input class="form-control" name="model" type="text" value="<?php if($_GET['actie'] == "edit"){echo $data_deelnemer['model'];} ?>"></div>
            <div class="col-md-4">CC: <input class="form-control" name="cc" type="text" value="<?php if($_GET['actie'] == "edit"){echo $data_deelnemer['cc'];} ?>"></div>
        </div>
        <div class="row">
            <div class="col-md-4">Startnummer: <input class="form-control" name="startnummer" type="text" value="<?php if($_GET['actie'] == "edit"){echo $data_deelnemer['startnummer'];} ?>"></div>
            <div class="col-md-4"><input class="form-control" name="actie" type="hidden" value="<?php echo $_GET['actie']; ?>"><input class="form-control" type="hidden" name="id" value="<?php if($_GET['actie'] == "edit"){echo $id;} ?>"></div>
            <div class="col-md-4"><br><button type="button" onclick="submit_form();" class="btn btn-light" style="border-color:red; color:red;">Opslaan</button></div>
        </div>
        </form>
    </div>
</body>

<script>
    function submit_form(){
        $('#edit_form').submit();
    }
</script>