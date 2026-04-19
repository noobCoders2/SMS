<?php
$config = require('config.php');
$db = new Database($config['database']);

$heading = "Dashboard";

$total_students = $db->query("SELECT COUNT(*) as count FROM students")->fetch()['count'] ?? 0;
$total_employees = $db->query("SELECT COUNT(*) as count FROM employees")->fetch()['count'] ?? 0;

$total_revenue = 125000.00; 
$attendance_rate = 87.5; 

$monthly_enrollment = [
    ['month' => '2025-09', 'count' => 45],
    ['month' => '2025-10', 'count' => 52],
    ['month' => '2025-11', 'count' => 38],
    ['month' => '2025-12', 'count' => 67],
    ['month' => '2026-01', 'count' => 43],
    ['month' => '2026-02', 'count' => 58],
    ['month' => '2026-03', 'count' => 72],
    ['month' => '2026-04', 'count' => 35]
];

$monthly_revenue = [
    ['month' => '2025-09', 'revenue' => 85000],
    ['month' => '2025-10', 'revenue' => 92000],
    ['month' => '2025-11', 'revenue' => 78000],
    ['month' => '2025-12', 'revenue' => 105000],
    ['month' => '2026-01', 'revenue' => 88000],
    ['month' => '2026-02', 'revenue' => 96000],
    ['month' => '2026-03', 'revenue' => 112000],
    ['month' => '2026-04', 'revenue' => 65000]
];

$student_distribution = [
    ['program' => 'BSCS', 'count' => 145],
    ['program' => 'BSIT', 'count' => 98],
    ['program' => 'BSEMC', 'count' => 67],
    ['program' => 'BSBA', 'count' => 89]
];

$monthly_attendance = [
    ['month' => '2025-09', 'rate' => 85.2],
    ['month' => '2025-10', 'rate' => 88.7],
    ['month' => '2025-11', 'rate' => 82.1],
    ['month' => '2025-12', 'rate' => 91.3],
    ['month' => '2026-01', 'rate' => 86.8],
    ['month' => '2026-02', 'rate' => 89.4],
    ['month' => '2026-03', 'rate' => 87.9],
    ['month' => '2026-04', 'rate' => 84.6]
];

$recent_enrollments = [
    ['student_id' => '2026001', 'first_name' => 'John', 'last_name' => 'Doe', 'program' => 'BSCS', 'created_at' => '2026-04-15'],
    ['student_id' => '2026002', 'first_name' => 'Jane', 'last_name' => 'Smith', 'program' => 'BSIT', 'created_at' => '2026-04-14'],
    ['student_id' => '2026003', 'first_name' => 'Mike', 'last_name' => 'Johnson', 'program' => 'BSEMC', 'created_at' => '2026-04-13'],
    ['student_id' => '2026004', 'first_name' => 'Sarah', 'last_name' => 'Williams', 'program' => 'BSBA', 'created_at' => '2026-04-12'],
    ['student_id' => '2026005', 'first_name' => 'David', 'last_name' => 'Brown', 'program' => 'BSCS', 'created_at' => '2026-04-11']
];

include("view/index.view.php");
?>




