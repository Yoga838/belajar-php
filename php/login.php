<?php
    $error = '';

    if(isset($_POST['submit'])){
        if(empty($_POST['uname']) || empty($_POST['passw'])){
            $error="username or password is empty";
        }
        else{
            $user = $_POST['uname'];
            $pass = $_POST['passw'];
            if ($user == "admin" and $pass == "admin"){
                // header("location : /project-pweb/login_page");
                echo "<script>
                alert('Berhasil Login');
                document.location.href = './productList.php';
                </script>";
            }
            else{
                $error = "* username or password is wrong";
            }
        }
    }
?>