<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>後台管理系統</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

        .sidebar {
            min-width: 250px;
            max-width: 250px;
            background-color: #2e3b4e;
            color: #fff;
            height: 100%;
        }

        .sidebar .nav-link,
        .sidebar .nav-link:hover {
            color: #fff;
        }

        .content {
            flex-grow: 1;
            overflow-y: auto;
            padding: 20px;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar p-3">
        <h4 class="text-center py-2">後台系統</h4>
        <nav class="nav flex-column">
            <a href="#" class="nav-link active"> <i class="fas fa-tachometer-alt"></i> Dashboard</a>
            <a href="#" class="nav-link"> <i class="fas fa-project-diagram"></i> Projects</a>
            <a href="#" class="nav-link"> <i class="fas fa-shopping-cart"></i> eCommerce</a>
            <a href="#" class="nav-link"> <i class="fas fa-bullhorn"></i> Marketing</a>
            <a href="#" class="nav-link"> <i class="fas fa-cogs"></i> 系統設定</a>
            <a href="#" class="nav-link"> <i class="fas fa-users"></i> 使用者管理</a>
            <a href="{{ route('logout') }}" class="nav-link"> <i class="fas fa-sign-out-alt"></i> 登出</a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">後台管理系統</span>
                <div class="d-flex align-items-center">
                    <span class="me-3">歡迎，{{ Auth::user()->name }}</span>
                    <img src="https://via.placeholder.com/40" alt="User Avatar" class="rounded-circle">
                </div>
            </div>
        </nav>

        <!-- Main Dashboard Content -->
        <main class="mt-4">
            @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
