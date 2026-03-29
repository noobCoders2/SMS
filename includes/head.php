<?php
$baseURL = "/StudentManagementSystem";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'System' ?></title>

    <!-- Google Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Global CSS -->
    <link href="<?= $baseURL ?>/assets/css/global.css" rel="stylesheet">
    <link href="<?= $baseURL ?>/assets/css/sidebar.css" rel="stylesheet">
    <link href="<?= $baseURL ?>/assets/css/navbar.css" rel="stylesheet">
    <link href="<?= $baseURL ?>/assets/css/footer.css" rel="stylesheet">

    <!-- Page CSS -->
    <?php if (isset($link_css)): ?>
        <link href="<?= $link_css ?>" rel="stylesheet">
    <?php endif; ?>
</head>

<body>
<div class="d-flex main_Content_page">