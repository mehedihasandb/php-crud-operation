<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpcrud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to get the maximum salary
$max_salary_query = "SELECT MAX(employee_salary) AS max_salary FROM employee_info";
$max_salary_result = $conn->query($max_salary_query);

if ($max_salary_result->num_rows > 0) {
    $max_salary_row = $max_salary_result->fetch_assoc();
    $max_salary = $max_salary_row['max_salary'];

    // SQL query to get employee name, salary, and department name for the maximum salary
    $sql = "SELECT e.id, e.employee_name, e.employee_salary, d.name AS department_name 
            FROM employee_info e 
            INNER JOIN departments d ON e.department_id = d.id 
            WHERE e.employee_salary = $max_salary";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output the maximum salary
        echo "Maximum Salary: " . $max_salary . "<br>";

        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "Employee Name: " . $row["employee_name"] . " - Salary: " . $row["employee_salary"] . " - Department Name: " . $row["department_name"] . "<br>";
        }
    } else {
        echo "0 results";
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
