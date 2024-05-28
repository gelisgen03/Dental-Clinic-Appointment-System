<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    
</head>
<body style="background-color: grey;">
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

                <div>
                    <img src="/assets/densin00.png" height="300" width="300" alt="">
                </div>
              <h2 class="fw-bold mb-2 text-uppercase">Giriş Yap</h2>
              <p class="text-white-50 mb-5">Lütfen TC kimlik numaranızı ve şifrenizi girin!</p>

              <form action="/views/ConnectionProfil.php" method="post">

                <div data-mdb-input-init class="form-outline form-white mb-4">
                  <input type="text" id="typeTCX" name="typeTCX" class="form-control form-control-lg" required />
                  <label class="form-label" for="typeTCX">TC</label>
                </div>

                <div data-mdb-input-init class="form-outline form-white mb-4">
                  <input type="password" id="typePasswordX" name="typePasswordX" class="form-control form-control-lg" required/>
                  <label class="form-label" for="typePasswordX">Şifre</label>
                </div>

                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">Giriş</button>  

              </div>

              </form>

            <div>
              <p class="mb-0">Bir Hesabın Yok mu? <a href="/views/register.php" class="text-white-50 fw-bold">Hesap Oluştur</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
</body>
</html>