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
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form class="col-md-12"  method="POST" action="{{ route('register') }}">
        @csrf
        <div class="col-md-12">
        <div class="col-md-12 d-flex justify-content-center p-1">
        <h2 class="col-md-6 d-flex justify-content-center">Regisztráció</h2>
        <br><br><br>
        
        </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Név:</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Írja be a nevét">
                  </div>
              <div class="form-group col-md-6">
                <label for="email">E-mail cím:</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Adja meg E-mail címét">
              </div>
              <div class="form-group col-md-6">
                <label for="orszag">Ország:</label>
                <select name="orszag" class="form-control" id="orszag" required>
                    <option value="" disabled selected>Válassz egy országot</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->name }}" {{ old('orszag') == $country->name ? 'selected' : '' }}>{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group col-md-6">
                <label for="varos">Város:</label>
                <input type="text" name="varos" class="form-control" id="varos" placeholder="Város">
            </div>
          <div class="form-group col-md-6">
            <label for="telszam">Telefonszám:</label>
            <input type="text" name="telszam" class="form-control" id="telszam" placeholder="Adja meg telefonszámát">
          </div>
            <div class="form-group col-md-6">
                <label for="szuldate">Születési Dátum:</label>
                <input type="date" name="szuldate" class="form-control" id="szuldate">
            </div>
            <div class="form-group col-md-6">
              <label for="password">Jelszó:</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Adja meg jelszavát">
            </div>
            <div class="form-group col-md-6">
              <label for="password_confirmation">Adja meg újra a jelszavát:</label>
              <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Ismételje meg a jelszavát">
            </div>
        </div>
        <br>
              <div class="col-md-12 d-flex justify-content-center">
              <button type="submit" class="btn btn-primary">Regisztráció</button>
            </div>
            </div>
    </form>
    <br>
    <div>
        <div class="col-md-12 d-flex justify-content-center flex-column">
            <div class="d-flex justify-content-center">
                Már van fiókja? <a href="{{ route('login') }}">Lépjen be itt</a>
            </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <script>
                $(document).ready(function () {
                    $('#orszag').change(function () {
                        var countryId = $(this).val();
                        if (countryId) {
                            $.ajax({
                                type: "GET",
                                url: "/get-cities/" + countryId,
                                success: function (res) {
                                    if (res) {
                                        varosSelect = $("#varos");
                                        varosSelect.empty();
                                        $.each(res, function (key, value) {
                                            varosSelect.append('<option value="' + value + '">' + value + '</option>');
                                        });
                                    } else {
                                        $("#varos").empty();
                                    }
                                }
                            });
                        } else {
                            $("#varos").empty();
                        }
                    });
                });
            </script>
</body>
</html>