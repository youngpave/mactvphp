<?php
// Yayıncı sitenin asıl kaynak adresi
$url = "https://dlhd.pk/stream/stream-62.php";

// Android kimliği (User-Agent)
$ua = "Mozilla/5.0 (Linux; Android 14; 23117RK66C) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Mobile Safari/537.36";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_USERAGENT, $ua);

// Burası kritik: Yayıncı site senin oradan geldiğini sanmalı
curl_setopt($ch, CURLOPT_REFERER, "https://dlhd.pk/");

$response = curl_exec($ch);
curl_close($ch);

// İçeriği ekrana bas
echo $response;
?>
