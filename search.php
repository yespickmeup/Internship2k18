<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysqli_connect("localhost","root","password","db_prototypes");
    $query=mysqli_query($con, "select pet_name from pets where pet_name LIKE '%{$key}%'");
    while($row=mysqli_fetch_assoc($query))
    {
      $array[] = $row['pet_name'];
    }
    echo json_encode($array);
    mysqli_close($con);
?>