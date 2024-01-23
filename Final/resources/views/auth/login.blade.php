<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Belépés</title>
</head>
<body class="d-flex justify-content-center align-items-center m-5" style="background-color: rgba(0,0,255,.1)">
    
    <div class="border border-black p-3 d-flex justify-content-center flex-column h-100 d-inline-block" style="width: 1050px; background-color: rgb(255, 255, 255)">
    <form class="col-md-12"  method="POST" action="{{ route('register') }}">
        @csrf
        <div class="col-md-12">
        <div class="col-md-12 d-flex justify-content-center p-1">
        <h2 class="col-md-6 d-flex justify-content-center">Belépés</h2>
        </div>
        <div class="d-flex justify-content-center">
            <div class="form-group col-md-12 d-flex justify-content-center">
              <div class="form-group col-md-6">
                <label for="email">E-mail cim:</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email" autocomplete="given-email">
              </div>
            <div class="form-group col-md-6">
              <label for="password">Jelszó:</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Jelszo">
            </div>
        </div>
        </div>
              <div class="col-md-12 d-flex justify-content-center">
              <button type="submit" class="btn btn-primary">Belépés</button>
            </div>
            </div>
    </form>
    <div class="col-md-12 d-flex justify-content-center flex-column">
    <div>
        Nincs még fiókod? <a href="{{ route('register') }}">Regisztráció</a>
    </div>
    </div>
    </div>
    
</body>
</html>