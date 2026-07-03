<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutGo | Login</title>
</head>
<body>
    <h1>FutGo</h1>
    <p>Ingresa tus credenciales para acceder al Panel de FutGo!</p>

    <form method="POST" action="">
        @csrf

        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>

        <div>
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
        </div>

        <div>
            <a href="{{ route('appIndex') }}">Acceder</a>
            
        </div>
    </form>
</body>
</html>