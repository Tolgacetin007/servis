<?php
require_once "../plugin/admin/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	date_default_timezone_set('Europe/Istanbul');
	$musteri_id = $_POST["musteriid"];
	$verilen_hizmet = $_POST["verilen_hizmet"];
	$servis_tipi = $_POST["servis_tipi"];
	$hizmeti_saglayan = "Tolga Çetin";
	$olusturulma_tarihi = date("Y-m-d H:i:s");
	

    // Insert a new row into the servisler table
	$sql = "INSERT INTO servisler (musteri_id, verilen_hizmet, servis_tipi, hizmeti_saglayan, olusturulma_tarihi) VALUES (?, ?, ?, ?, ?)";
	$stmt= $db->prepare($sql);
	$stmt->execute([$musteri_id, $verilen_hizmet, $servis_tipi, $hizmeti_saglayan, $olusturulma_tarihi]);
	$servis_id = $db->lastInsertId();

    // Insert a new row into the servis_personel table for each selected personnel
	if (!empty($_POST["personel"])) {
		$selectedPersonels = $_POST["personel"];
		foreach ($selectedPersonels as $selectedPersonel) {
			$sql = "INSERT INTO servis_personel (servis_id, personel) VALUES (?, ?)";
			$stmt= $db->prepare($sql);
			$stmt->execute([$servis_id, $selectedPersonel]);
		}
	}

    // Insert a new row into the urunler table for each product
	if (!empty($_POST["urun"])) {
		$urunler = $_POST["urun"];
		foreach ($urunler as $urun) {
			$urunAdi = $urun["urun"];
			$urunAdet = $urun["adet"];
			try {
				$dblocal = new PDO("mysql:host=$host;dbname=$logindb;charset=utf8",$dbkullanici,$dbpassword,array(PDO::ATTR_PERSISTENT => true));
				$dblocal->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			} catch(PDOException $e) {
				die("Veritabanı Bağlantısı Sağlanamadı");
			}
			$sql = "INSERT INTO servis_urun (servis_id, urun_adi, urun_adet) VALUES (?, ?, ?)";
			$stmt= $dblocal->prepare($sql);
			$stmt->execute([$servis_id, $urunAdi, $urunAdet]);
		}
	}

	header("location:../index.php");
}
else
{
	header("location:../index.php");
}
?>