<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="/public/assets/css/style.css">
</head>
<body>

    <form id="box" action="/login" method="POST">
        <div style="font-size: 20px; margin: 10px;">Log In</div>

        <label for="username">Username</label>:
        <input class="text" type="text" id="username" name="username" required>
        <br>
        <label for="mypass">Password</label>:
        <input class="text" type="password" id="mypass" name="mypass" required>
        <br>
        Are you a :
        <div>
            <input type="radio" name="role" value="buyer"> Buyer<br>
            <input type="radio" name="role" value="farmer"> Farmer<br>
        </div>
        <br>
        <input id="button" type="submit" value="Click to Login">
    </form>

    <form id="box" action="/register" method="POST">
        <div style="font-size: 20px; margin: 10px;">Don't have an account? Register!</div>
        <button id="button" type="submit">Register</button>
    </form>

</body>
</html>
