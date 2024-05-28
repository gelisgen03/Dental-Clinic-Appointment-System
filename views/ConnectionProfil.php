<?php

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri al
    $typeTCX = $_POST['typeTCX'];
    $typePasswordX = $_POST['typePasswordX'];

    // Veritabanı bağlantısı
    $mysqli = new mysqli("localhost", "root", "", "dentisdb");

    // Bağlantı kontrolü
    if ($mysqli->connect_error) {
        echo json_encode(["message" => "Bağlantı hatası: " . $mysqli->connect_error]);
        exit();
    }

    // Kullanıcı doğrulama sorgusu
    $sql = "SELECT * FROM infos WHERE Tc = ? AND Password = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $typeTCX, $typePasswordX);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Kullanıcı bulundu
        session_start();
        $user = $result->fetch_assoc();
        $_SESSION['user'] = $user;
        header('Location: profile.php');
        exit();
    } else {
        // Kullanıcı bulunamadı
        echo json_encode(["message" => "Geçersiz TC veya şifre."]);
    }

    // İfadeleri kapat
    $stmt->close();
    $mysqli->close();
}
?>
