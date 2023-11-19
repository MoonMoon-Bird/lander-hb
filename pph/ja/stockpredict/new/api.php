<?php

if ($_GET['stockcode']) {
    // $stockcode = $_GET['stockcode'];
    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, "https://aikabu.online/Api/?stockcode=$stockcode&apikey=5be315c5aae1d14e");
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($ch, CURLOPT_REFERER, "https://aikabu.online/st0");

    // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

    // $output = curl_exec($ch);
    // curl_close($ch);

    // echo $output;
}else{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://cdn.www.aikabu.online/Api/getping.php?apikey=5be315c5aae1d14e");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_REFERER, "https://aikabu.online/st0");

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

    $output = curl_exec($ch);
    curl_close($ch);

    echo $output;
}