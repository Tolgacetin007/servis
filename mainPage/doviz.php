<?php
// API'den verileri al
$json = file_get_contents('https://api.exchangerate-api.com/v4/latest/USD');

// JSON verilerini çözümleme
$data = json_decode($json, true);

// Döviz kurlarını alma
$eur_rate = $data['rates']['EUR'];
$try_rate = $data['rates']['TRY'];

// Değişkenlere 2 haneli olarak atama
$usd_kuru = number_format($try_rate, 2, '.', '');
$euro_kuru = number_format($try_rate / $eur_rate, 2, '.', '');
$usd_euro = number_format(1 / $eur_rate, 2, '.', '');
$euro_usd = number_format($eur_rate, 2, '.', '');

// Sonuçları ekrana yazdırma
//echo 'USD/TRY: ' . $usd_kuru . '<br>';
//echo 'EUR/TRY: ' . $euro_kuru . '<br>';
//echo 'USD/EUR: ' . $usd_euro . '<br>';
//echo 'EUR/USD: ' . $euro_usd . '<br>';

?>