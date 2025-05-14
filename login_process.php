<?php
session_start();
include('koneksi.php'); // Pastikan Anda sudah mengatur koneksi ke database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Cek apakah email dan password tidak kosong
    if (empty($email) || empty($password)) {
        echo "Email and password cannot be empty.";
        exit();
    }

    // Query untuk mengambil data user berdasarkan email
    $sql = "SELECT * FROM users WHERE email = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            
            // Verifikasi password
            if (password_verify($password, $user['password'])) {
                // Jika email dan password valid, buat session dan redirect ke index.php
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                header("Location: index.php");
                exit();
            } else {
                echo "Invalid email or password";
            }
        } else {
            echo "No user found with that email address.";
        }
        $stmt->close();
    } else {
        echo "Failed to prepare SQL statement.";
    }
} else {
    echo "Invalid request method.";
}

$conn->close();
?>
