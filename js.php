<?php 
$website="https://api.telegram.org/bot6189034505:AAFfJo3siDPKA1juFvOiXRXRtG8BZFIB2Bo";

$params=[
    'chat_id'=>'-878079317',
    'text'=>$msg,
];
$ch = curl_init($website . '/sendMessage');
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);
?>
