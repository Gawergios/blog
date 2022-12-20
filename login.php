<?php
session_start();
if (isset($_POST['login'])){
    $email= $_POST['email'];
    $password = $_POST['password'];

    $connect = mysqli_connect("localhost","root","","blog");
    $query = "select * from `user` where `email`='$email' AND `password` ='$password'";
    $myq = mysqli_query($connect,$query);
    $userdata = mysqli_fetch_assoc($myq);


    if(isset($userdata ) >0 ){
        $_SESSION['user'] = $userdata;
        header("LOCATION:admin/view.php");

    }

}

?>
<form action="login.php" method="post">
    <input type="email" name="email" >
    <input type="password" name="password">
    <input type="submit" name="login" value="login">
</form>