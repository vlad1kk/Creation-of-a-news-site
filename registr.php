<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Form registration</title>
</head>

<body>
    <!-- registration form -->
    <form action="validation-form/check.php" method="post">
        <label>Login</label>
        <input type="text" class="form-control" name="login" id="login" placeholder="Enter login">
        <label>Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
        <label>Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
        <button type="submit" class="btn">Sign up</button>
    </form>
</body>

</html>