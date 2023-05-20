<?php
$mysqli=mysqli_connect('localhost:4306','root','','user8');
if($mysqli===false){
    die("Error:no occured".$mysqli_connect_error());
}
$username=$_REQUEST['username'];
$Email=$_REQUEST['Email'];
$password=$_REQUEST['password'];
$sql="INSERT INTO userconn VALUES('$username','$Email','$password')";
if(mysqli_query($mysqli,$sql)){
    echo"submitted";
}
else{

}
$mysqli->close();
?>