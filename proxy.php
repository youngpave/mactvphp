<?php
$url = "https://dlhd.pk/stream/stream-62.php";

// Senin Xiaomi telefonunun kimliği
$ua = "Mozilla/5.0 (Linux; Android 14; 23117RK66C) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Mobile Safari/537.36";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
curl_setopt($ch, CURLOPT_REFERER, "https://dlhd.pk/");

$html = curl_exec($ch);
curl_close($ch);

// Sayfa içindeki linklerin bozulmaması için ana adresi ekliyoruz
$base_url = '<base href="https://dlhd.pk/stream/">';
$html = str_replace('<head>', '<head>' . $base_url, $html);

echo $html;
?>
