<?php
// Hedef aldığımız DaddyLive sayfası
$hedef_url = "https://dlhd.pk/stream/stream-62.php";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $hedef_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

// İŞTE SANKİ ORADA AÇMIŞIZ GİBİ YAPTIĞIMIZ EN KRİTİK 2 SATIR:
// Sunucuya "Ben senin ana sayfandan geliyorum" diyoruz
curl_setopt($ch, CURLOPT_REFERER, "https://dlhd.pk/"); 
// Gerçek bir Google Chrome tarayıcısı gibi davranıyoruz
curl_setopt($ch, CURLOPT_USER_AGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36");

$kaynak_kod = curl_exec($ch);
curl_close($ch);

// DaddyLive'ın oyuncusunu kendi ekranımıza basıyoruz
echo $kaynak_kod;
?>
