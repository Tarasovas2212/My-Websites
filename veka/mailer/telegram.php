<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$width = $_POST['width'];
$height = $_POST['height'];
$open = $_POST['open'];

$token = "640485756:AAF4etEX6B8N5wvhU-wiID3Zapl6Y1aMdTo";
$chat_id = "-294092451";
$arr = array(
  'VEKA',
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
    'Ширина:' => $width,
    'Высота:' => $height,
    'Количество открываний:' => $open
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  echo "Sucsess";
} else {
  echo "Error32432";
}
?>
