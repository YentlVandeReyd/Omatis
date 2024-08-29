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

<div class="container">
    <a href="edit.php?actie=nieuw" style="float:right; margin-top:10px;" class="btn btn-light">NIEUW</a>
    <div id="tabel"></div>
    <div id="crud_div"></div>
</div>
<script>
    $('#tabel').load('table.php');
</script>
<script>
    function verwijder(x){
        $('#crud_div').load('crud.php?id=' + x + '&actie=verwijder');
        $('#tabel').load('table.php');
    };
    function duplicate(x){
        $('#crud_div').load('crud.php?id=' + x + '&actie=duplicate');
        $('#tabel').load('table.php');
    };
</script>