<?php 
include 'connect.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `curdoperation` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header(location:display.php);
        // echo "Deleted";
    }else{
        die(mysqli_error($con));
    
    }

}

?>