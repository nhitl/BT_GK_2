<?php
// sanitize_output.php

function sanitize_output($data) {
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

// Example usage
$userInput = '<script>alert("XSS")</script>';
$safeOutput = sanitize_output($userInput);
echo $safeOutput; // &lt;script&gt;alert(&quot;XSS&quot;)&lt;/script&gt;
?>
