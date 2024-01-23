<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Profil</title>
</head>
<body class="d-flex justify-content-center align-items-center m-5" style="background-color: rgba(0,0,255,.1)">
    <div>
    <h1>Üdvözöllek, {{ Auth::user()->name }}!</h1>
        <p>Ez a profil oldal.</p></div>
    <br>
    <br>
    <div>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
            Kijelentkezés
        </a>
    
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</body>
</html>