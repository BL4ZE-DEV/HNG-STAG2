<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="https://9e19-102-134-112-57.ngrok-free.app/api/auth/register" method="POST">
        @csrf
        <label for="firstName">Firstname:</label>
        <input type="string" id="firstName" name="firstName" required>
        <br>

        <label for="lastName">lastName:</label>
        <input type="string" id="lastName" name="lastName" required>
        <br>

        <label for="email">email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="phone">phone:</label>
        <input type="phone" id="phone" name="phone" required>
        <br>

        <label for="password">password:</label>
        <input type="string" id="password" name="password" required>
        <br>

        <label for="password_confirmation">password confirmation:</label>
        <input type="string" id="password_confirmation" name="password_confirmation">
        <br>
        <button type="submit">register</button>
    </form>
</body>
</html>
