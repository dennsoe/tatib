<?php

class kelas
{
    function showAll($con)
    {
        $list = array();
        $q = mysqli_query($con, "select * from kelas");
        while ($dt = mysqli_fetch_array($q)) {
            $list[] = $dt;
        }
        return $list;
    }

    function find($con,$id_kelas)
    {
        $q=mysqli_query($con,"select * from kelas where id_kelas = $id_kelas");
        $dt=mysqli_fetch_array($q);
        return $dt;
    }
}

?>