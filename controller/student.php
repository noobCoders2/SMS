<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = "Student";

session_start();

// Insert new Data 

$last_name = "";
$first_name = "";
$program = "";
$year = "";
$status = "";
$student_id = "";

$success_Msg = "";
$edit_error_Msg = "";
if (isset($_SESSION['success_msg'])) {
    $success_Msg = $_SESSION['success_msg'];
    unset($_SESSION['success_msg']);
}
$error_Msg = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['update_student'])) {
        $student_id = trim($_POST['student_id']);
        $last_name = trim($_POST['last_name']);
        $first_name = trim($_POST['first_name']);
        $program = trim($_POST['program']);
        $year = trim($_POST['year']);
        $status = trim($_POST['status']);

        if (empty($student_id) || empty($last_name) || empty($first_name) || empty($program) || empty($year) || empty($status)) {
            $edit_error_Msg = "All fields are required.";
        } else {
            $db->query("UPDATE `students` SET last_name = ?, first_name = ?, program = ?, year = ?, status = ? WHERE student_id = ?", [
                $last_name, $first_name, $program, $year, $status, $student_id
            ]);

            $_SESSION['success_msg'] = "Student record updated successfully";
            header("Location: /StudentManagementSystem/student");
            exit();
        }
    } else {
        $last_name = trim($_POST['last_name']);
        $first_name = trim($_POST['first_name']);
        $program = trim($_POST['program']);
        $year = trim($_POST['year']);
        $status = trim($_POST['status']);
        if (empty($last_name) || empty($first_name) || empty($program) || empty($year) || empty($status)) {
            $error_Msg = "All fields are required.";
        } else {
            // Generate student_id
            $current_year = date('Y');
            $prefix = $current_year . '-';
            $result = $db->query("SELECT student_id FROM students WHERE student_id LIKE ? ORDER BY student_id DESC LIMIT 1", [$prefix . '%']);
            $last_id = $result->fetch();
            if ($last_id) {
                $last_number = (int) substr($last_id['student_id'], strlen($prefix));
                $next_number = $last_number + 1;
            } else {
                $next_number = 1;
            }
            $student_id = $prefix . str_pad($next_number, 5, '0', STR_PAD_LEFT);

            $db->query("INSERT INTO `students` (student_id, last_name, first_name, program, year, status) VALUES (?, ?, ?, ?, ?, ?)", [
                $student_id, $last_name, $first_name, $program, $year, $status
            ]);

            $_SESSION['success_msg'] = "Student record saved successfully";
            header("Location: /StudentManagementSystem/student");
            exit();
        }
    }
}

if (isset($_GET['delete'])) {
    $student_id = trim($_GET['delete']);
    if (!empty($student_id)) {
        $db->query("DELETE FROM `students` WHERE student_id = ?", [$student_id]);
        $_SESSION['success_msg'] = "Student record deleted successfully";
        header("Location: /StudentManagementSystem/student");
        exit();
    }
}

$list_students = $db->query("SELECT * FROM `students`")->fetchAll();

$total_students = count($list_students);
$total_enrolled = 0;
$total_not_enrolled = 0;
$total_bscs = 0;
$total_bit = 0;

foreach ($list_students as $student) {
    if (isset($student['status']) && $student['status'] === 'Enrolled') {
        $total_enrolled++;
    }
    if (isset($student['status']) && $student['status'] === 'Not Enrolled') {
        $total_not_enrolled++;
    }
    if (isset($student['program']) && $student['program'] === 'BS Computer Science') {
        $total_bscs++;
    }
    if (isset($student['program']) && $student['program'] === 'BS Information Technology') {
        $total_bit++;
    }
}

include('./view/student.view.php')
?>