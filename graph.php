<!-- graph.php -->
<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }
        .navbar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px 20px;
            }

            .navbar-logo {
                font-size: 20px;
                font-weight: bold;
                color: white;
                margin-right: 20px;
            }

            .navbar-buttons {
                display: flex;
                gap: 10px;
            }

            .navbar-buttons a {
                padding: 8px 15px;
                background-color: #FFC700;
                color: white;
                border-radius: 5px;
                text-decoration: none;
            }
    </style>
</head>
<body style="background-color: #FFFDE7;">
    <div class="navbar">
        <img src="img/logo.png" alt="Logo" class="navbar-logo">
        <div class="navbar-buttons">
            <a href="home.php">Home</a>
            <a href="admin.php">Transaksi</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
</body>
</html>
