<?php
session_start();
$user = $_SESSION['user'];

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri al
    $tarih = $_POST['tarih'];
    $sikayet = $_POST['sikayet'];
    $saat = $_POST['saat'];
    $doktor = $_POST['doktor'];
    $updTc = htmlspecialchars($user['Tc']) ;
    
    
    
    // Veritabanı bağlantısı
    $mysqli = new mysqli("localhost", "root", "", "dentisdb");

    // Bağlantı kontrolü
    if ($mysqli->connect_error) {
        echo json_encode(["message" => "Bağlantı hatası: " . $mysqli->connect_error]);
        exit();
    }

    // Veritabanında kullanıcı bilgilerini güncelleme sorgusu
    $sql = "UPDATE infos SET  Apo_Date= ?, ill = ?, Clock = ?,Doctor = ? WHERE Tc = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sssss", $tarih, $sikayet, $saat, $doktor ,$updTc);


    // Güncelleme sorgusunu çalıştır
    if ($stmt->execute()) {
        header('Location: randevubasarili.php');
    } else {
        echo json_encode(["message" => "Randevu Oluşturulurken hata oluştu: " . $stmt->error]);
    }

    // İfadeleri kapat
    $stmt->close();
    $mysqli->close();
}
?>
