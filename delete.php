<?php
include 'database.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `users` where id=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        //echo "Delete Succesful";
        header('location:index.php');
    }else{
        die (mysqli_error($con));
    }
}
