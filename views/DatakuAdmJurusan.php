<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Bebas Tanggungan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        /* Sidebar styling */
        .sidebar {
            background: linear-gradient(to bottom, #021a44, #043873, #4fa3ff);
            color: white;
            min-width: 200px;
            max-width: 200px;
            display: flex;
            flex-direction: column;
            position: fixed;
            height: 100vh;
            padding-top: 0.1px;
        }

        .sidebar .nav-link {
            color: white;
            font-weight: 500;
            padding: 10px 20px;
        }

        .sidebar .nav-link:hover {
            background-color: #FFE492;
            color: white;
            padding: 3px 6px;
            border-radius: 8px;
            font-size: 15px;
            margin-top: -4px;
            margin-bottom: -1px;

        }

        .content {
            margin-left: 200px;
            flex-grow: 1;

        }

        .sidebar .logo {
            width: 80px;
            margin-top: -20px;
        }

        .sidebar-footer {
            margin-top: auto;
            /* Push to bottom */
            font-size: 0.8rem;
            text-align: center;
            padding: 10px 0;
            color: white;
        }

        .sidebar .nav-item {
            margin-bottom: 15px;
            /* Tambah jarak antar menu */
        }

        h5 {
            margin-top: -20px;
            /* mengatur jarak logo dan sibtan */
        }

        header {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 10px 20px;
            background-color: #CCE5FF;
        }

        header .user {
            font-weight: bold;
            color: #2B74C4;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="d-flex flex-grow-1">
        <!-- Sidebar -->
        <nav class="sidebar">
            <div class="text-center py-4">
                <img src="img/designLogo.png" alt="Logo SiBTAN" class="logo mb-1">
                <h5>SiBTAN</h5>
            </div>
            <ul class="nav flex-column px-2">
                <li class="nav-item my-2"><a href="DashboardAdmJurusan.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="ProfileAdmJurusan.php" class="nav-link">Profile</a></li>
                <li class="nav-item"><a href="TataCaraAdmJurusan.php" class="nav-link">Tata Cara</a></li>
                <li class="nav-item"><a href="DatakuAdmJurusan.php" class="nav-link active">Dataku</a></li>
                <li class="nav-item"><a href="InfoAdmJurusan.php" class="nav-link">Info Data</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Logout</a></li>
                <li class="nav-item"><a href="CallAdmJurusan.php" class="nav-link">Call Center</a></li>
            </ul>
            <div class="sidebar-footer">
                © 2024 SiBTAN JTI Polinema.
            </div>
        </nav>

        <!-- Main Content -->
        <div class="content">
            <header>
                <img src="img/logouser.jpg" alt="User Avatar" style="width: 25px; height: 25px;  border-radius: 50%;margin-right: 10px;">
                <div class="user">Lutfi Triaswangga</div>
            </header>

            <!-- Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html> 