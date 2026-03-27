<?php 
$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar bg-white shadow-sm px-4 py-2">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <!--  Search -->
        <div class="search-container">
            <i class="bi bi-search"></i>
            <input type="text" class="form-control w-50" placeholder="Search students...">
        </div>

    
        <div class="d-flex align-items-center gap-3">

            <!-- Notification -->
            <div class="icon-container position-relative">
                <i class="bi bi-bell"></i>
                <span class="badge-dot"></span>
            </div>

            <!-- Profile -->
            <div class="profile d-flex align-items-center gap-2">
                <img src="./assets/images/weird.jpg" alt="profile">
                <span class="fw-semibold">Admin</span>
                <i class="bi bi-chevron-down small"></i>
            </div>

        </div>
    </div>
</nav>