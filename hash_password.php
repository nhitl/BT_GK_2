<?php
// hash_password.php

// Hashing a password
$password = 's0/\/\P4$$w0rD';
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

// Verifying a password
if (password_verify($password, $hashed_password)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
?>
