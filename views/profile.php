
<!--Website: wwww.codingdung.com-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hesabım</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--Session -->
    <?php
        session_start();

        // Kullanıcı giriş yapmamışsa, giriş sayfasına yönlendir
        if (!isset($_SESSION['user'])) {
            header('Location: login.php');
            exit();
        }

        // Kullanıcı bilgilerini al
        $user = $_SESSION['user'];
    ?>

</head>

<body>

    <div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4">
        <h1>Merhaba, <?php echo htmlspecialchars($user['Name']); ?>!</h1>

        </h4>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                    <img  src="/assets/densin00.png"  alt="">

                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-profil"><i class="fa fa-user" style="color:black" onclick=""></i>  Profilim</a>

                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-settings"><i class="fa fa-wrench" style="color:black" onclick=""></i> Profil Ayarı</a>

                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-randevu"><i class="fa fa-calendar-plus-o" style="color:black" onclick=""></i> Randevu Al</a>
                            
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                        href="#account-randevular"><i class="fa fa-calendar-check-o" style="color:black" onclick=""></i> Randevularım</a>
                        
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                        href="#account-cikis"><i class="fa fa-sign-out" style="color:black" onclick=""></i> Çıkış Yap</a>
                        
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        
                    <div class="tab-pane fade active show" id="account-profil">
                            <div class="card-body pb-2">
                            <center>
                            <img src="/assets/person2.jpg" height="150">
                            </center>

                                <div class="form-group">
                                    <label class="form-label">Adım</label>
                                    <div class="alert alert-info" role="alert">
                                    <?php echo htmlspecialchars($user['Name']); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Soyadım</label>
                                    <div class="alert alert-info" role="alert">
                                    <?php echo htmlspecialchars($user['Surname']); ?>  
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">TC</label>
                                    <div class="alert alert-info" role="alert">
                                    <?php echo htmlspecialchars($user['Tc']); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Yaşım</label>
                                    <div class="alert alert-info" role="alert">
                                    <?php echo htmlspecialchars($user['Age']); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Telefonum</label>
                                    <div class="alert alert-info" role="alert">
                                    <?php echo htmlspecialchars($user['Tel_No']); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mailim</label>
                                    <div class="alert alert-info" role="alert">
                                    <?php echo htmlspecialchars($user['E_Mail']); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Şehrim</label>
                                    <div class="alert alert-info" role="alert">
                                    <?php echo htmlspecialchars($user['City']); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-settings">
                            <div class="card-body media align-items-center">
                            </div>
                            <hr class="border-light m-0">

                            <div class="card-body">
                            
                            <center>
                            <img src="/assets/ayar1.png" height="100">
                            </center>
                            
                            <form action="/views/bilgiGuncelle.php" method="post">

                                <div class="form-group">
                                    <label class="form-label">Adım</label>
                                    <input name="updAd" type="text" class="form-control" value="<?php echo htmlspecialchars($user['Name']); ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Soyadım</label>
                                    <input name="updSoyad" type="text"  class="form-control" value="<?php echo htmlspecialchars($user['Surname']); ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">TC</label>
                                    <input name="updTc" type="text" class="form-control" value="<?php echo htmlspecialchars($user['Tc']); ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Yaşım</label>
                                    <input name="updYas" type="text" class="form-control" value="<?php echo htmlspecialchars($user['Age']); ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Telefonum</label>
                                    <input name="updTel" type="text" class="form-control" value="<?php echo htmlspecialchars($user['Tel_No']); ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mailim</label>
                                    <input name="updMail" type="text" class="form-control" value="<?php echo htmlspecialchars($user['E_Mail']); ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Şehrim</label>
                                    <input name="updSehir" type="text" class="form-control" value="<?php echo htmlspecialchars($user['City']); ?>">
                                </div>

                               <br>
                               <div class="form-group">
                                    <center>
                                    <button type="submit" class="btn btn-outline-success">Değişiklikleri Kaydet</button>
                                    <button onclick="location.reload()" type="button" class="btn btn-outline-dark">İptal</button>  
                                    </center>    
                               </div>
                                
                                
                                <br>
                                
                            </div>
                            </form>
                        </div>
                      
                        
                        <div class="tab-pane fade" id="account-randevu">
                            <div class="card-body pb-2">
                                
                                <div class="form-group">
                        
                                <center>
                                <img src="/assets/randevuayar1.png" height="150">
                                </center>
                                <form method="post" action="/views/randevuAl.php">
                                    <label class="form-label">Doktor Seçiniz:</label>
                                    <select name="doktor" class="custom-select">
                                        <option>Dr. Rufeyde Nur Gelişgen</option>
                                        <option>Dr. Betül Taş</option>
                                        <option>Dr. Buse Taşçı</option>
                                         <option selected></option>
                        
                                    </select>
                                    <br><br>
                                    
                                    <label class="form-label" for="randevuTarihi">Randevu Tarihi Seçiniz:</label>
                                    <br>
                                    <input class="custom-select" type="date" id="randevuTarihi" name="tarih" required>
                            
                                     <br>
                                    <label class="form-label">Randevu Saati Seçiniz:</label>
                                    <select name="saat" class="custom-select">
                                        <option>09:00</option>
                                        <option>10:00</option>
                                        <option>11:00</option>
                                        <option>13:00</option>
                                        <option>14:00</option>
                                        <option>15:00</option>
                                        <option>16:00</option>
                                        <option>17:00</option>
                                        <option selected></option>
                                    </select>
                                    <br><br>
                                    <label class="form-label">Şikayetiniz:</label>
                                    <input name="sikayet" type="text" class="form-control">

                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="text-center mt-3">
                            <button type="submit" class="btn btn-success"><i class="fa fa-plus" style="color:white"></i>  Randevu Oluştur</button>
                            </div>
                            </form>

                            
                            <hr class="border-light m-0">
                            <br>
                        </div>

                        <div class="tab-pane fade" id="account-randevular">
                            <div class="card-body pb-2">
                            
                            <center>
                            <img src="/assets/randevu.png" height="150">
                            </center>
                        

        
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <p>Doktor: <?php echo htmlspecialchars($user['Doctor']); ?></p>
                            <p>Tarih: <?php echo htmlspecialchars($user['Apo_Date']); ?></p>
                            <p>Saat: <?php echo htmlspecialchars($user['Clock']); ?></p>
                            <p>Şikayet: <?php echo htmlspecialchars($user['ill']); ?></p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="account-cikis">
                            <div class="card-body pb-2">
                          
                            <center>
                            <img src="/assets/cikis.png" height="100">
                            </center>
                            <br>
                                <center>
                                <a href="/index.php" class="btn btn-danger">Çıkış Yap</a>   
                                </center>
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>