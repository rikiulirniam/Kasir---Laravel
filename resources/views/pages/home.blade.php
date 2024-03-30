<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welkam bebi</h1>
    <p>{{ Auth::user() }}</p>
    <form method="POST" action={{ route('auth.logout') }} >
        <button type="submit">
            Logout
        </button>
        @csrf
    </form>
</body>
</html>
