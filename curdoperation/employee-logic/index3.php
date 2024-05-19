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

// SQL query to get employee name and salary with the maximum salary
$sql = "SELECT e.id, e.employee_name,e.employee_salary, d.name FROM employee_info e INNER JOIN departments d ON e.department_id = d.id;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Employee Name: " . $row["employee_name"]. " - employee_Salary: " . $row["employee_salary"] .  "  - Department Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>