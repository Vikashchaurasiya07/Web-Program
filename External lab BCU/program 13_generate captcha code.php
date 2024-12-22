<?php
function generateCaptcha($length = 6) {
    return substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'), 0, $length);
}
echo "Generated CAPTCHA: " . generateCaptcha();
?>
