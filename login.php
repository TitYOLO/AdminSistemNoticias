<?php
include "db_conn.php";

if(isset($_POST['uname']) && isset($_POST['password'])){
    
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

 $uname = $_POST['uname'];
 $pass = $_POST['password'];

if(empty($uname)){
    header("Location : index.php?error=User Name is requiered");
    exit();
}else if(empty($pass)){
    header("Location : index.php?error=Password is requiered");
    exit();
}
else{
    $sql = "SELECT * FROM users WHERE  user_name='$uname' AND  password='$pass'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)){
        echo "Hello aaaa";
    }
}

}else{
    header("Location : index.php");
    exit();
}

?>
