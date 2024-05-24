<?php
// form.php
session_start();

// Generate CSRF token
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$csrf_token = $_SESSION['csrf_token'];
?>

<form method="POST" action="process.php">
    <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
    <!-- Other form fields -->
    <input type="submit" value="Submit">
</form>
