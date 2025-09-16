<?php
$user_name = htmlspecialchars($_POST["user_name"]);
$user_phone = htmlspecialchars($_POST["user_phone"]);

$token = "7977068185:AAGzH3ERp0OKnXew4qi8uV9gdcvRf5X2H2I";
$chat_id = "-4843193241";

$formData = array(
  "Клиент: " => $user_name,
  "Телефон: " => $user_phone
);

foreach($formData as $key => $value) {
  $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A" ;
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if ($sendToTelegram) {
  echo "Succes";
} else {
  echo "Error";
}

