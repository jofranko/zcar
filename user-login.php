<?php 

include('db.php');

if(isset($_POST['user_log'])){
    $username= $_POST['l_username'];
    $password= $_POST['l_password'];

    $query = "SELECT * FROM users WHERE users.username='$username' AND users.password='$password'";
    $result = mysqli_query($conn,$query);
    if(!$result){
        $_SESSION['logfail']='Unsuccessful entry';
    }
    if($result){
        $_SESSION['logwell']='Successful entry';
        $_SESSION['loguser']=$result;
    }
    header("Location: index.php");
}

?>