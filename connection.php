<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'bank';

$con = mysqli_connect($server,$username,$password,$db);

if($con){
    // echo "connection succesful";
    ?>

    <script>
        alert(connection successful);
    </script>
    <?php
}else{
    // echo "NO connection";
    die("no connection" . mysqli_connect_error());
}        
?>
