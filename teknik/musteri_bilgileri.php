<?php
// Veritabanı bağlantısı yapıyoruz
require_once "../plugin/admin/db.php";

// Eğer post ile müşteri id'si gelmişse, müşteri bilgilerini çekiyoruz
if(isset($_POST['musteri_id'])){
    $musteri_id = $_POST['musteri_id'];

    // Veritabanından müşteri bilgilerini çekiyoruz
    $sorgu = $db->prepare("SELECT * FROM musteriler WHERE id = ?");
    $sorgu->execute([$musteri_id]);
    $musteri = $sorgu->fetch(PDO::FETCH_ASSOC);

    // Müşteri bilgilerini JSON formatına dönüştürüp gönderiyoruz
    echo json_encode($musteri);
}
?>
