<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    echo json_encode(['username' => $_SESSION['username'], 'email' => $_SESSION['email']]);
} else {
    echo json_encode(['username' => null, 'email' => null]);
}
?>
