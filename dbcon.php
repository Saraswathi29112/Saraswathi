<?php

$con = mysqli_connect("localhost:4306","root","","blog");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}

?>