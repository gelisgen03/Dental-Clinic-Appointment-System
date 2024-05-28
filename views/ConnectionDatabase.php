<?php

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri al
    $tyTC = $_POST['tyTC'];
    $typeAd = $_POST['typeAd'];
    $typeSoyAd = $_POST['typeSoyAd'];
    $typeYas = $_POST['typeYas'];
    $typeSehir = $_POST['typeSehir'];
    $typeTel = $_POST['typeTel'];
    $typeEmail = $_POST['typeEmail'];
    $typePassword = $_POST['typePassword'];
    $typePassword2 = $_POST['typePassword2'];

    // Veritabanı bağlantısı
    $mysqli = new mysqli("localhost", "root", "", "dentisdb");

    // Bağlantı kontrolü
    if ($mysqli->connect_error) {
        echo json_encode(["message" => "Bağlantı hatası: " . $mysqli->connect_error]);
        exit();
    }

    // Aynı TC, telefon numarası veya e-posta kontrolü
    $checkQuery = "SELECT * FROM infos WHERE Tc = ? OR Tel_No = ? OR E_Mail = ?";
    $checkStmt = $mysqli->prepare($checkQuery);
    $checkStmt->bind_param("sss", $tyTC, $typeTel, $typeEmail);
    $checkStmt->execute();
    $result = $checkStmt->get_result();

    if ($result->num_rows > 0) {
        echo json_encode(["Bu TC, telefon numarasi veya e-posta zaten kayitli."]);
    } else {
        // Veritabanına veri ekleme sorgusu (hazır ifade kullanımı)
        $sql = "INSERT INTO infos (Tc, Name, Surname, Age, City, Tel_No, E_Mail, Password) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        // Sorguyu hazırla
        $stmt = $mysqli->prepare($sql);

        // Sorguyu çalıştırma
        if ($stmt) {
            // Parametreleri bağla
            $stmt->bind_param("ssssssss", $tyTC, $typeAd, $typeSoyAd, $typeYas, $typeSehir, $typeTel, $typeEmail, $typePassword);

            // Sorguyu çalıştır
            if ($stmt->execute()) {
                
                echo json_encode(["success" => true, "Kayit basariyla eklendi."]);
            } else {
                echo json_encode(["success" => false, "message" => "Hata: " . $sql . "<br>" . $mysqli->error]);
            }
            

            // İfadeleri kapat
            $stmt->close();
        } else {
            echo json_encode(["message" => "Hazırlama hatası: " . $mysqli->error]);
        }
    }

    // Kontrol ifadesini kapat
    $checkStmt->close();

    // Veritabanı bağlantısını kapat
    $mysqli->close();
}
?>
