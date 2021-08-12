<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>セッション</title>
</head>
<body>
    <p>本文</p>
    <p>{{ $session_data }}</p>
    <form action = "/session" method = POST>
        @csrf
        <input type="text" name="input">
        <input type="submit" value="send">
    </form>
    </form>
</body>
</html>
