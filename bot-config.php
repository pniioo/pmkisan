<?php
// Your Telegram Bot Token and Chat ID
$botToken = "YOUR_BOT_API_TOKEN";
$chatId = "YOUR_CHAT_ID";  // Your Telegram channel or user chat ID

// Message based on the type of box clicked
if(isset($_GET['action'])) {
    $action = $_GET['action'];
    $message = "";

    if ($action == "new_registration") {
        $message = "New Farmer Registration clicked!";
    } elseif ($action == "kyc") {
        $message = "e-KYC clicked!";
    } elseif ($action == "payment_installation") {
        $message = "Payment Installation clicked!";
    }

    // Send the message
    $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=$message";
    file_get_contents($url); // Send the message to Telegram
}
?>
