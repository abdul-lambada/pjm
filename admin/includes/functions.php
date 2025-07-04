<?php
// Fungsi-fungsi utility untuk admin panel
// Contoh: fungsi cek login, helper tampilan, dsb.

function is_logged_in() {
    return isset($_SESSION['user_id']);
}

// Placeholder untuk helper UI di masa depan
// function render_alert($type, $message) { ... }
