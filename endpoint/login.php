<?php
include('../conn/conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT `password`, `role`, `tbl_user_id` FROM `tbl_user` WHERE `username` = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch();
        $stored_password = $row['password'];
        $stored_role = $row['role'];
        $user_id = $row['tbl_user_id'];

        if ($password === $stored_password) {
            session_start();
            $_SESSION['user_id'] = $user_id;

            if ($stored_role == 'admin') {
                echo "
                <script>
                    alert('Has ingresado como Admin!');
                    window.location.href = 'http://localhost/roles-login/admin.php';
                </script>
                ";
            } else if ($stored_role == 'user') {
                echo "
                <script>
                    alert('Has ingresado como usuario!');
                    window.location.href = 'http://localhost/roles-login/user.php';
                </script>
                ";
            }
        } else {
            echo "
            <script>
                alert('Contraseña incorrecta!');
                window.location.href = 'http://localhost/roles-login/';
            </script>
            ";
        }
    } else {
        echo "
            <script>
                alert('Usuario no encontrado!');
                window.location.href = 'http://localhost/roles-login/';
            </script>
            ";
    }
}
