<?php
if (isset($_REQUEST['confirm']) && strlen($_REQUEST['login']) > 3 && strlen($_REQUEST['password']) > 3 && $_REQUEST['login'] != 'admin') {
    include("db.php");
    
    Execute("INSERT INTO User (login, password, status) VALUES ('".$_REQUEST['login']."', '".$_REQUEST['password']."', 'user')");
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log up</title>
</head>

<body>
    <center>
        <h1>Log in</h1>
        <form action="logup.php" method="POST">
        <label for="login">Logup</label>
        <div class="input-group mb-3">
            <div class="input-group-text">
                <input type="text" name="login" id="login" class="form-control" aria-label="login">
            </div>
        </div>

        <label for="login">Password</label>
        <div class="input-group">
            <div class="input-group-text">
                <input type="password" id="password" class="form-control" aria-label="password">
            </div>
        </div>
        <input type="hidden" name="confirm" class="form-control" value="fuck" aria-label="password">
        <div class="input-group">
            <div class="input-group-text">
                <input type="submit" class="form-controlbtn btn-outline-secondary"/>
            </div>
        </div>
        </form>
    </center>
</body>
</html>