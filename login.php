<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Admin log in</title>
</head>

<body>
    <!-- authorization form admin -->
    <form action="admin/admin.php" method="post">
    <h1 class="header">LOGIN TO THE ADMIN PANEL</h1>
        <label>Login</label>
        <input type="text" class="form-control" name="login" id="login" placeholder="Enter admin login">
        <label>Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter the admin password">
        <button type="submit" class="btn">Log in</button>
    </form>
</body>

</html>