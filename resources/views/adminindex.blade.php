<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Gadget Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <style>
        body {
            background-color: #f5f5f5; /* Light background color */
            color: #333; /* Dark text color */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .side-panel {
            background-color: #ffffff; /* White side panel */
            color: #333;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 250px;
            padding: 60px 20px 20px;
            overflow-y: auto;
            transition: left 0.3s ease;
            z-index: 1000;
            text-align: left;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1); /* Light shadow */
        }
        .main-content {
            margin-left: 250px;
            transition: margin-left 0.3s ease;
            padding: 20px;
        }
        .side-panel-logo {
            margin-bottom: 20px;
            text-align: center;
        }
        .side-panel-logo img {
            max-width: 80%;
            height: auto;
        }
        .side-panel-nav {
            margin-top: 20px;
        }
        .side-panel-nav .nav-link {
            color: #007bff; /* Link color */
            padding: 10px 15px;
            border-radius: 5px;
            margin: 5px 0;
            transition: background-color 0.3s, color 0.3s;
        }
        .side-panel-nav .nav-link:hover,
        .side-panel-nav .nav-link.active {
            background-color: #e0f7fa; /* Light blue background on hover */
            color: #007bff; /* Consistent link color */
        }
        .nav-item .icon {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="side-panel">
        <div class="side-panel-logo">
            <img src="logo.png" alt="Logo">
        </div>
        <nav class="side-panel-nav">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/') }}">
                        <span class="icon">🏠</span> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/users') }}">
                        <span class="icon">👥</span> Users
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/products') }}">
                        <span class="icon">📦</span> Products
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/category') }}">
                        <span class="icon">📂</span> Categories
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="main-content">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    @yield('scripts')
</body>
</html>
