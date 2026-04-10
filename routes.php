<?php
$uri = parse_url($_SERVER["REQUEST_URI"])['path'];
$routes = [
    '/StudentManagementSystem/' => 'controller/index.php',
    '/StudentManagementSystem/index' => 'controller/index.php',
    '/StudentManagementSystem/student' => 'controller/student.php',
    '/StudentManagementSystem/employee' => 'controller/employee.php',
    '/StudentManagementSystem/academic' => 'controller/academic.php',
    '/StudentManagementSystem/attendance' => 'controller/attendance.php',
    '/StudentManagementSystem/fee' => 'controller/fee.php',
    '/StudentManagementSystem/grades' => 'controller/grades.php',
    '/StudentManagementSystem/payments' => 'controller/payments.php',
    '/StudentManagementSystem/reports' => 'controller/reports.php',
    '/StudentManagementSystem/setting' => 'controller/setting.php',
    '/StudentManagementSystem/enrollment' => 'controller/enrollment.php',
    '/StudentManagementSystem/payroll' => 'controller/payroll.php'
];
if(array_key_exists($uri, $routes)){
    require $routes[$uri];
} else {
    require 'controller/404.php';
}

?>