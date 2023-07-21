<?php
session_start();
include('conn.php');

// Check if the user is already logged in and has the role of 'admin'
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && $_SESSION['role'] === 'admin') {
    header('Location: admin.php'); // Redirect to admin.php
    exit;
}

// Koneksi ke database
$conn = mysqli_connect("172.24.0.2", "root", "password", "projectuas");
if (!$conn) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}

// Memproses login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login WHERE user='$username' AND passwd='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['user'] === 'admin' && $row['passwd'] === 'admin') {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['role'] = 'admin'; // Add this line to set the role to 'admin'
            echo '<script>';
            echo 'alert("Berhasil Login!!!");';
            echo 'window.location.href = "admin.php";'; // Redirect to admin.php
            echo '</script>';
            exit;
        } else {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            echo '<script>';
            echo 'alert("Berhasil Login!!!");';
            echo 'window.location.href = "home.php";'; // Redirect to home.php
            echo '</script>';
            exit;
        }
    } else {
        $loginError = 'Username atau password salah.';
    }
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    .login-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .login-container label {
      display: block;
      margin-bottom: 8px;
    }

    .login-container input[type="text"],
    .login-container input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 3px;
      box-sizing: border-box;
    }

    .login-container input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      border: none;
      border-radius: 3px;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
    }

    .login-container input[type="submit"]:hover {
      background-color: #45a049;
    }

    .login-container .message {
      margin-top: 20px;
      text-align: center;
      color: #666;
    }
  </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Login">
        </form>
        <?php if (isset($error)) { ?>
            <p class="message"><?php echo $error; ?></p>
        <?php } ?>
        <p class="message">Not registered? <a href="register.php">Create an account</a></p>
    </div>
</body>
<footer>
<div id="1h58mh2f5"></div>
</footer>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/64b07d10cc26a871b02846f2/1h58mh2f5';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
</html>
