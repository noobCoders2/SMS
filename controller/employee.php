<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = "Employee Management";

session_start();

// Initialize variables
$last_name = "";
$first_name = "";
$position = "";
$status = "";
$employee_id = "";

$success_Msg = "";
$edit_error_Msg = "";
if (isset($_SESSION['success_msg'])) {
    $success_Msg = $_SESSION['success_msg'];
    unset($_SESSION['success_msg']);
}
$error_Msg = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['update_employee'])) {
        $employee_id = trim($_POST['employee_id']);
        $last_name = trim($_POST['last_name']);
        $first_name = trim($_POST['first_name']);
        $position = trim($_POST['position']);
        $status = trim($_POST['status']);

        if (empty($employee_id) || empty($last_name) || empty($first_name) || empty($position) || empty($status)) {
            $edit_error_Msg = "All fields are required.";
        } else {
            $db->query("UPDATE `employees` SET last_name = ?, first_name = ?, position = ?, status = ? WHERE employee_id = ?", [
                $last_name, $first_name, $position, $status, $employee_id
            ]);

            $_SESSION['success_msg'] = "Employee record updated successfully";
            header("Location: /StudentManagementSystem/employee");
            exit();
        }
    } else {
        $last_name = trim($_POST['last_name']);
        $first_name = trim($_POST['first_name']);
        $position = trim($_POST['position']);
        $status = trim($_POST['status']);
        if (empty($last_name) || empty($first_name) || empty($position) || empty($status)) {
            $error_Msg = "All fields are required.";
        } else {
            // Generate employee_id
            $current_year = date('Y');
            $prefix = 'EMP' . $current_year . '-';
            $result = $db->query("SELECT employee_id FROM employees WHERE employee_id LIKE ? ORDER BY employee_id DESC LIMIT 1", [$prefix . '%']);
            $last_id = $result->fetch();
            if ($last_id) {
                $last_number = (int) substr($last_id['employee_id'], strlen($prefix));
                $next_number = $last_number + 1;
            } else {
                $next_number = 1;
            }
            $employee_id = $prefix . str_pad($next_number, 5, '0', STR_PAD_LEFT);

            $db->query("INSERT INTO `employees` (employee_id, last_name, first_name, position, status) VALUES (?, ?, ?, ?, ?)", [
                $employee_id, $last_name, $first_name, $position, $status
            ]);

            $_SESSION['success_msg'] = "Employee record saved successfully";
            header("Location: /StudentManagementSystem/employee");
            exit();
        }
    }
}

if (isset($_GET['delete'])) {
    $employee_id = trim($_GET['delete']);
    if (!empty($employee_id)) {
        $db->query("DELETE FROM `employees` WHERE employee_id = ?", [$employee_id]);
        $_SESSION['success_msg'] = "Employee record deleted successfully";
        header("Location: /StudentManagementSystem/employee");
        exit();
    }
}

$list_employees = $db->query("SELECT * FROM `employees`")->fetchAll();

$total_employees = count($list_employees);
$total_active = 0;
$total_inactive = 0;
$total_professors = 0;
$total_instructors = 0;

foreach ($list_employees as $employee) {
    if (isset($employee['status']) && $employee['status'] === 'Active') {
        $total_active++;
    }
    if (isset($employee['status']) && $employee['status'] === 'Inactive') {
        $total_inactive++;
    }
    if (isset($employee['position']) && $employee['position'] === 'Professor') {
        $total_professors++;
    }
    if (isset($employee['position']) && $employee['position'] === 'Instructor') {
        $total_instructors++;
    }
}

include('./view/employee.view.php')
?>