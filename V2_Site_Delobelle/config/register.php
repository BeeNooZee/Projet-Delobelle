<?php
global $connexion;
include('db.php');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql_check = "SELECT * FROM Users WHERE Username = ? OR Email = ?";
$stmt_check = $connexion->prepare($sql_check);
$stmt_check->bind_param("ss", $username, $email);
$stmt_check->execute();
$result = $stmt_check->get_result();

if ($result->num_rows > 0) {
    echo "Username or email already exists.";
} else {
    $sql = "INSERT INTO Users (Username, Email, Password) VALUES (?, ?, ?)";
    $stmt = $connexion->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        echo "New account created successfully";
    } else {
        echo "Error creating account: " . $stmt->error;
    }
    $stmt->close();
}

$stmt_check->close();
$connexion->close();
?>