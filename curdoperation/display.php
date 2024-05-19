<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curd operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a class="text-light" href="user.php">Add User</a></button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>

                <?php
            $sql = "select * from `curdoperation`";
            $result=mysqli_query($con,$sql);
            if($result){
               while($row= mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['name'];
                $email=$row['email'];
                $phone=$row['phone'];
                $password=$row['password'];
                echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$phone.'</td>
                    <td>'.$password.'</td>
                        <td>
                    <button class="btn btn-info" ><a href="update.php?updateid='.$id.'" class="text-light">Edit</a></button>
                    <button class="btn btn-danger"  ><a href="delete.php?deleteid='.$id.'" class="text-light" >Delete</a></button>
                </td>
                </tr>';
            }
            }
            ?>
            <!-- <td>
                <button class="btn btn-info" ><a href="">Edit</a></button>
                <button class="btn btn-danger"  ><a href="">Delete</a></button>
            </td> -->
            </tbody>
        </table>


    </div>
</body>

</html>