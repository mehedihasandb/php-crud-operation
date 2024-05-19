<?php
include 'config.php';

if(isset($_POST['submit'])){
    $name='employee_name';
    $salary='employee_salary';
}
$result="insert into `phpcrud` (employee_name,employee_salary) values('$employee_name','$employee_salary')"


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5"> 
        <h1>Hello, world!</h1>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Add Employee</label>
                <input type="text" name="employee_name" class="form-control" placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label class="form-label">Employee</label>
                <input type="text" name="employee_salary" class="form-control" placeholder="Enter your name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>