<?php
// encrypt_data.php

function encrypt($data, $key) {
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $encrypted = openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv);
    return base64_encode($iv . $encrypted);
}

function decrypt($data, $key) {
    $data = base64_decode($data);
    $iv = substr($data, 0, openssl_cipher_iv_length('aes-256-cbc'));
    $encrypted = substr($data, openssl_cipher_iv_length('aes-256-cbc'));
    return openssl_decrypt($encrypted, 'aes-256-cbc', $key, 0, $iv);
}

$key = 'your-secret-key';
$originalData = 'Sensitive Data';

$encryptedData = encrypt($originalData, $key);
echo 'Encrypted: ' . $encryptedData . PHP_EOL;

$decryptedData = decrypt($encryptedData, $key);
echo 'Decrypted: ' . $decryptedData . PHP_EOL;
?>
