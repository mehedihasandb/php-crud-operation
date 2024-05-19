<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `curdoperation` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$phone=$row['phone'];
$password=$row['password'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $sql = "update `curdoperation` set id=$id,name='$name',email='$email',phone='$phone',password='$password' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Data Updated";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CURD OPERATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5" autocomplite="off">
        <form method="post">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name" autocomplete="off"  value=<?php echo $name ?>>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your mail" autocomplete="off"  value=<?php echo $email ?>>
            </div>
            <div class="mb-3">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Enter your number" autocomplete="off"  value=<?php echo $phone ?>>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="text" name="password" class="form-control" placeholder="Enter your password" autocomplete="off"  value=<?php echo $password ?>>
            </div>


            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

</body>

</html>