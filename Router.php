<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/StudentManagementSystem/config.php';
$page = $_GET['page'] ?? 'dashboard';

$modules = [
    'dashboard'  => ROOT_PATH . '/modules/dashboard/dashboard.php',
    'employee'   => ROOT_PATH . '/modules/employee/employee.php',
    'student'    => ROOT_PATH . '/modules/student/student.php',
    'academic'   => ROOT_PATH . '/modules/academic/academic.php',
    'attendance' => ROOT_PATH . '/modules/attendance/attendance.php',
    'accounting' => ROOT_PATH . '/modules/accounting/accounting.php',
    'enrollment' => ROOT_PATH . '/modules/Enrollment/enrollment.php',
    'grade'      => ROOT_PATH . '/modules/grade_management/grade.php',
    'payroll'    => ROOT_PATH . '/modules/payroll/payroll.php',
    'reports'    => ROOT_PATH . '/modules/reports/reports.php',
    'settings'   => ROOT_PATH . '/modules/settings/settings.php'
];

$modulePath = $modules[$page] ?? $modules['dashboard'];


$title = ucwords(str_replace('_', ' ', $page));
$baseURL = BASE_URL;
$link_css = $baseURL . "/assets/css/{$page}.css";
$tab = $_GET['tab'] ?? null;


include ROOT_PATH . '/includes/head.php';
include ROOT_PATH . '/includes/sidebar.php';

include $modulePath;

include ROOT_PATH . '/includes/_footer.php';?>