<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="https://9e19-102-134-112-57.ngrok-free.app/api/auth/login" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="string" id="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
