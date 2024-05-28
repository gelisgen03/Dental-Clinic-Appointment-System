<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet">
    <!-- MDB CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    
</head>
<body style="background-color: grey;">
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div  class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

                <div>
                    <img src="/assets/densin00.png" height="300" width="300" alt="">
                </div>
              <h2 class="fw-bold mb-2 text-uppercase">YENİ KAYIT</h2>
              <p class="text-white-50 mb-5">Lütfen Kişisel Bilgilerinizi Doldurunuz!</p>

            <form action="/views/ConnectionDatabase.php" method="post" id="registrationForm">
                <div data-mdb-input-init class="form-outline form-white mb-4">
                    <input required style="background-color: grey;" type="text" id="typeAd" name="typeAd" class="form-control form-control-lg" />
                    <label for="typeAd">Ad</label>
                </div>

                <div data-mdb-input-init class="form-outline form-white mb-4">
                    <input required style="background-color: grey;" type="text" id="typeSoyAd" name="typeSoyAd" class="form-control form-control-lg" />
                    <label for="typeSoyAd">Soyad</label>
                </div>

                <div data-mdb-input-init class="form-outline form-white mb-4">
                    <input required style="background-color: grey;" type="text" id="tyTC" name="tyTC" class="form-control form-control-lg" />
                    <label for="typeTC">TC</label>
                </div>

                <div data-mdb-input-init class="form-outline form-white mb-4">
                    <input required style="background-color: grey;" type="text" id="typeYas" name="typeYas" class="form-control form-control-lg" />
                    <label for="typeYas">Yaş</label>
                </div>

                <div data-mdb-input-init class="form-outline form-white mb-4">
                    <input required style="background-color: grey;" type="text" id="typeSehir" name="typeSehir" class="form-control form-control-lg" />
                    <label for="typeSehir">Şehir</label>
                </div>

                <div data-mdb-input-init class="form-outline form-white mb-4">
                    <input required style="background-color: grey;" type="text" id="typeTel" name="typeTel" class="form-control form-control-lg" />
                    <label for="typeTel">Telefon Numarası (05**)</label>
                </div>

                <div data-mdb-input-init class="form-outline form-white mb-4">
                    <input required style="background-color: grey;" type="email" id="typeEmail" name="typeEmail" class="form-control form-control-lg" />
                    <label  for="typeEmail">E-mail</label>
                </div>

                <div data-mdb-input-init class="form-outline form-white mb-4">
                    <input required style="background-color: grey;" type="password" id="typePassword" name="typePassword" class="form-control form-control-lg" />
                    <label  for="typePassword">Şifre</label>
                </div>

                <div data-mdb-input-init class="form-outline form-white mb-4">
                    <input required style="background-color: grey;" type="password" id="typePassword2" name="typePassword2" class="form-control form-control-lg" />
                    <label  for="typePassword2">Şifre Tekrar</label>
                </div>

                <button data-mdb-button-init data-mdb-ripple-init class="btn btn btn-success btn-lg px-5" type="submit">Kayıt Ol</button>  
            </form>

            <div id="resultMessage" style="color: red; margin-top: 10px;"></div>

<!-- MDB JS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
<!-- JavaScript -->
<script>
    document.getElementById('registrationForm').addEventListener('submit', function(event) {
        event.preventDefault();

        var password = document.getElementById('typePassword').value;
        var confirmPassword = document.getElementById('typePassword2').value;
        var email = document.getElementById('typeEmail').value;

        if (password !== confirmPassword) {
            document.getElementById('resultMessage').innerText = 'Şifreler aynı değil!';
            return;
        }

        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test(email)) {
            document.getElementById('resultMessage').innerText = 'Geçersiz e-mail formatı!';
            return;
        }

        var formData = new FormData(this);

        fetch('/views/ConnectionDatabase.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            
                if (data.success) {
                    window.location.href = "kayitbasarili.php";
                } else {
                    document.getElementById('resultMessage').innerText = data.message;
                }

            
        })
        .catch(error => {
            document.getElementById('resultMessage').innerText = 'Bir hata oluştu: ' + error;
        });
    });
</script>
              

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
</body>
</html>