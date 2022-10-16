<?php

function sendMessage($chatID, $messaggio, $token) {
    echo "sending message to " . $chatID . "\n";

    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
    $url = $url . "&text=" . urlencode($messaggio);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

$token = "5677505583:AAGd_enhKeP6A9zu9WNk8UGqMkwikrTlvtM";
$chatid = "1913438485";

$msg = $_GET["msg"];

if(isset($_GET["msg"])){
 echo $msg
 sendMessage($chatid, $msg, $token);
}

?>
