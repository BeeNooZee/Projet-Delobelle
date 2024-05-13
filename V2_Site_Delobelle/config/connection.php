<?php
global $connexion;
include('db.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT UserID, Email, Password FROM Users WHERE Email = ?";

if ($stmt = $connexion->prepare($sql)) {
    $stmt->bind_param("s", $email);

    if ($stmt->execute()) {
        $stmt->bind_result($id, $email, $stored_password);
        if ($stmt->fetch()) {
            if ($password == $stored_password) {
                echo 'Login successful.';
            } else {
                echo 'Wrong password.';
            }
        } else {
            echo 'No account found with this email.';
        }
    } else {
        echo 'Oops! Something went wrong. Please try again later.';
    }
    $stmt->close();
}
$connexion->close();
?>