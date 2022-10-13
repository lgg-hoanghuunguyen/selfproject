<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="asserts/css/login.css" rel="stylesheet">
</head>

<body>
    <form action=".?action=login" method="POST">

        E-mail: <input type="text" name="email"><br>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required><br>
        <input type="submit" name="submit" value="submit">

    </form>

</body>

</html>