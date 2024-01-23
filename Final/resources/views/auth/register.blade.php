<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Regisztráció</title>
</head>
<body class="d-flex justify-content-center align-items-center m-5" style="background-color: rgba(0,0,255,.1)">
    
    <div class="border border-black p-3 d-flex justify-content-center flex-column h-100 d-inline-block" style="width: 1050px; background-color: rgb(255, 255, 255)">
    <form class="col-md-12"  method="POST" action="{{ route('register') }}">
        @csrf
        <div class="col-md-12">
        <div class="col-md-12 d-flex justify-content-center p-1">
        <h2 class="col-md-6 d-flex justify-content-center">Regisztráció</h2>
        </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Név:</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                  </div>
              <div class="form-group col-md-6">
                <label for="email">E-mail cím:</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="form-group col-md-6">
                <label for="orszag">Ország:</label>
                <input type="text" name="orszag" class="form-control" id="orszag" placeholder="orszag" required>
                </select>
              </div>
          <div class="form-group col-md-6">
            <label for="varos">Város:</label>
            <input type="text" name="varos" class="form-control" id="varos" placeholder="Varos">
          </div>
          <div class="form-group col-md-6">
            <label for="telszam">Telefonszám:</label>
            <input type="number" name="telszam" class="form-control" id="telszam" placeholder="Telefonszam">
          </div>
            <div class="form-group col-md-6">
                <label for="szuldate">Születési Dátum:</label>
                <input type="date" name="szuldate" class="form-control" id="szuldate" placeholder="szuldate">
            </div>
            <div class="form-group col-md-6">
              <label for="password">Jelszó:</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Jelszo">
            </div>
            <div class="form-group col-md-6">
              <label for="password_confirmation">Jelszó Ismét:</label>
              <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Jelszo Ismet">
            </div>
        </div>
              <div class="col-md-12 d-flex justify-content-center">
              <button type="submit" class="btn btn-primary">Regisztráció</button>
            </div>
            </div>
    </form>
    <div>
        <div class="col-md-12 d-flex justify-content-center flex-column">
            <div>
                Már van fiókod? <a href="{{ route('login') }}">Belépés</a>
            </div>
            </div>
</body>
</html>