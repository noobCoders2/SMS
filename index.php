<?php
include('function.php');

$uri = parse_url($_SERVER["REQUEST_URI"])['path'];
// Router error HAHAHAHH 
// nakaka-inis naman
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
    require '404.html';
}
// if($uri === "/StudentManagementSystem/index.php"){
//     require('controller/index.php');
// } else if($uri === "/StudentManagementSystem/student.php"){
//     require('controller/student.php');
// }else if($uri === "/StudentManagementSystem/employee.php"){
//     require('controller/employee.php');
// }else if ($uri === "/StudentManagementSystem/academic.php"){
//     require('controller/academic.php');
// }else if($uri === "/StudentManagementSystem/attendance.php"){
//     require('controller/attendance.php');
// }else if($uri === "/StudentManagementSystem/fee.php"){
//     require('controller/fee.php');
// }else if($uri === "/StudentManagementSystem/grades.php"){
//     require('controller/grades.php');
// }else if($uri === "/StudentManagementSystem/payments.php"){
//     require('controller/payments.php');
// }else if($uri === "/StudentManagementSystem/reports.php"){
//     require('controller/reports.php');
// }else if($uri === "/StudentManagementSystem/setting.php"){
//     require('controller/setting.php');
// }else if($uri === "/StudentManagementSystem/enrollment.php"){
//     require('controller/enrollment.php');
// }else if($uri === "/StudentManagementSystem/payroll.php"){
//     require('controller/payroll.php');
// }

?>