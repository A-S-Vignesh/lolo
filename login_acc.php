<?php
    include('connection.php'); 
    if (isset($_POST['login']))
    { 
        $username = $_POST['uname'];  
        $password = $_POST['psw'];
        
            //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
        
        $sql = "SELECT * FROM login_det WHERE uname = '$username' and pass = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result); 
        if($count == 1){  
            echo "<script type='text/javascript'>
            alert('Login Successful');
            document.getElementById('loginbtn').style.display = 'none';
            </script>";
        }  
        else{  
            echo "<script type='text/javascript'>alert('Login Failed');</script>";  
        }
    }
?>