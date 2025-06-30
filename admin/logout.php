<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Hapus hanya variabel session admin
unset(
    $_SESSION['admin_logged_in'],
    $_SESSION['admin_username'],
    $_SESSION['admin_avatar'],
    $_SESSION['admin_email']
);
session_destroy();
header('Location: /pjm/login.php');
exit;
?>
