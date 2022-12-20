<?php
session_start();
if (empty($_SESSION['user'])) {
    header("LOCATION:../login.php");
}

$id=$_GET['id'];
$connect = mysqli_connect("localhost","root","","blog");
$query = "delete from `post` where id=$id ";
$myq = mysqli_query($connect,$query);

$aff = mysqli_affected_rows($connect);
if ($aff ){
    header("LOCATION:view.php");
}else{
    echo "not delete";
}

?>