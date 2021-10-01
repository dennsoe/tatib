<?php
    class penindak{
        
       function show($con)
       {
           $q=mysqli_query($con,"select * from penindak where id_penindak = 1");
           $dt=mysqli_fetch_array($q);
           return $dt;
       }
    }


?>