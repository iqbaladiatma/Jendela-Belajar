<?php 
        include("service/database.php");
        session_start();
        $login_massage="";
    if(isset($_SESSION["ls_login"])){
        header("location: dashboard.php");
    };
    if(isset($_POST["login"])){ 
        $username= $_POST["login"];
        $password= $_POST["password"];

        $sql = "SELECT * FORM users WHERE username='$username' AND password='$password'";
        $result = $db->query($sql);

        if($result->num_rows > 0){ 
            $data= $result->fetch_assoc();
            $_SESSION["username"] = $data["username"];
            $_SESSION["password"] = $data["password"];

            header("location: index.html");
        }else{ 
            $login_massage="akun tidak di temukan";
        }
        $db->close();
    }

?>