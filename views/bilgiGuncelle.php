<?php

// JSON yanıt tipini ayarla
header('Content-Type: application/json');

// POST isteği kontrolü
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri al
    $updAd = $_POST['updAd'];
    $updSoyad = $_POST['updSoyad'];
    $updTc = $_POST['updTc'];
    $updYas = $_POST['updYas'];
    $updTel = $_POST['updTel'];
    $updMail = $_POST['updMail'];
    $updSehir = $_POST['updSehir'];

    // Veritabanı bağlantısı
      $mysqli = new mysqli("sql203.infinityfree.com", "if0_36633563", "GLD5JO3WEFz", "if0_36633563_dentisdb");

    // Bağlantı kontrolü
    if ($mysqli->connect_error) {
        echo json_encode(["message" => "Bağlantı hatası: " . $mysqli->connect_error]);
        exit();
    }

    // Veritabanında kullanıcı bilgilerini güncelleme sorgusu
    $sql = "UPDATE infos SET Name = ?, Surname = ?, Age = ?, Tel_No = ?, E_Mail = ?, City = ? WHERE Tc = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sssssss", $updAd, $updSoyad, $updYas, $updTel, $updMail, $updSehir, $updTc);

    // Güncelleme sorgusunu çalıştır
    if ($stmt->execute()) {
        header('Location: guncellemebasarili.php');
    } else {
        echo json_encode(["message" => "Bilgiler güncellenirken hata oluştu: " . $stmt->error]);
    }

    // İfadeleri kapat
    $stmt->close();
    $mysqli->close();
}
?>
