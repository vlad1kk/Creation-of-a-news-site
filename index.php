<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Form authorization</title>
</head>

<body>
    <!-- authorization form -->
    <form action="validation-form/auth.php" method="post">
        <label>Login</label>
        <input type="text" class="form-control" name="login" id="login" placeholder="Enter login">
        <label>Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
        <button type="submit" class="btn">Log in</button>
        <p>Don't have an account yet? <a href="registr.php">Sign up now</a></p>
        <p>Do you want to log in as an admin? <a href="login.php">Click here</a></p>
    </form>
</body>

</html>