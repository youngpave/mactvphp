<?php
// Hedef player adresi
$target_url = "https://benunluyumaskim.betconnectiframecdn1000.shop/player/player2.php?id=605";

// Kullanıcı senin sayfana girdiğinde onun tarayıcı bilgisini alalım ki bot gibi durmasın
$user_agent = $_SERVER['HTTP_USER_AGENT'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $target_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

// İŞTE KRİTİK NOKTA: "Yalanı" burada söylüyoruz.
curl_setopt($ch, CURLOPT_REFERER, "https://canlitvdedebet2.com/"); 
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);

// Bazı CDN'ler SSL kontrolü yapar, hata vermemesi için:
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($ch);
curl_close($ch);

// Gelen HTML'in içindeki göreceli (relative) yolları tam adrese çevirmemiz gerekebilir.
// Eğer JS ve CSS dosyaları yüklenmezse diye linkleri düzeltiyoruz:
$base_url = "https://benunluyumaskim.betconnectiframecdn1000.shop/player/";
$response = str_replace('href="', 'href="' . $base_url, $response);
$response = str_replace('src="', 'src="' . $base_url, $response);

echo $response;
?>
