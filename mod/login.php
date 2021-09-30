<?php
    
    class user{
        function login($con,$username,$password)
        {
            $q=mysqli_query($con,"select * from user where username='$username' and password='$password'");
            $cek = mysqli_fetch_array($q);
            if (!empty($cek[0]))
            {
                session_start();
                $_SESSION['id'] = $cek['id'];
                $_SESSION['nama'] = $cek['nama'];
                header('location:?p=home');
            }else
            {
                header('location:?p=login&login=fail');
            }
        }

        
    }
?>