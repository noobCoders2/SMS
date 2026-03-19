<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/login.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <title>Student Management System</title>
</head>
<body>
    <div class="d-flex flex-row login-container">
        <div class="w-50 d-flex flex-column name-container ms-5">
            <div class="image-container">
                <img src="/StudentManagementSystem/assets/images/EricsonAcademy.png" alt="ericson-academy" class="academy-image">
            </div>
            <div class="title-text ms-5">
                <h1 class="academy-title">Ericson Academy <span class="d-block fs-2 text-primary">Pio Duran Incorporated</span></h1>
            </div>  
        </div>
        <div class="login container m-5 p-5 shadow-sm w-50">
            <div class="d-flex title-container">
                <img src="../assets/images/ericson.jpg" alt="" class="rounded-circle titleimage mx-2">
                <div>
                    <h5>Ericson Academy Inc.</h5>
                    <p>Management System</p>
                </div>
            </div>
            <div class="my-4">
                <h5>Welcome Back</h5>
                <p>Please login to your account</p>
            </div>
            <form action="" class="d-flex flex-column">
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-person icons fs-4"></i>
                        </span>
                        <input type="text" class="form-control fs-5 py-2" placeholder="Username" id="username">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-lock icons fs-4"></i>
                        </span>
                        <input type="password" class="form-control py-2 fs-5" placeholder="Password" id="password">
                    </div>
                </div>
                <a href="" class="btn btn-primary mt-5 py-2">Sign In</a>
            </form>
        </div>
    </div>
</body>
</html>