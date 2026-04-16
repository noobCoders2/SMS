<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = "Student";

$list_students = $db->query("SELECT * FROM `students`")->fetchAll();

// Insert new Data 

$last_name = "";
$first_name = "";
$program = "";
$year = "";
$status = "";

$success_Msg = "";
if (isset($_GET['success'])) {
    $success_Msg = "Student record saved successfully";
}
$error_Msg = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $last_name = trim($_POST['last_name']);
    $first_name = trim($_POST['first_name']);
    $program = trim($_POST['program']);
    $year = trim($_POST['year']);
    $status = trim($_POST['status']);
    if (empty($last_name) || empty($first_name) || empty($program) || empty($year) || empty($status)) {
        $error_Msg = "All fields are required.";
    } else {
        $db->query("INSERT INTO `students` (last_name, first_name, program, year, status) VALUES (?, ?, ?, ?, ?)", [
            $last_name, $first_name, $program, $year, $status
        ]);

        header("Location: /StudentManagementSystem/student?success=1");
        exit();
    }
};

include('./view/student.view.php')
?>