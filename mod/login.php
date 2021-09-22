<?php
    
    class main{
        function login($con,$username,$password)
        {
            $q=mysqli_query($con,"select * from user where uername='$username' and password='$password'");
            $cek = mysqli_fetch_array($con);
            if (!empty($cek[0]))
            {
                session_start();
                $_SESSION['id'] = $cek['id'];
                $_SESSION['username'] = $username;
                header('location:?p=home');
            }
        }

        
    }
?>