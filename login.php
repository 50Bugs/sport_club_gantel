<?php
if (isset($_REQUEST['confirm'])) {
    include("db.php");
    $data = Get("SELECT * FROM `User`;");
    $flag = true;
    for ($i = 0; $i < mysqli_num_rows($data); $i++) {
        $f = mysqli_fetch_array($data);
        if($f['login'] == $_REQUEST['login']){
            if($f['password'] == $_REQUEST['password']){
                header('Location: index.php'.'?name='.$_REQUEST['login']);
                break;
            }
            echo 'Incorrect password';
            $flag = false;
        }
    }
    if($flag){
        echo 'Incorrect login';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>

<body>
    <center>
        <h1>Log in</h1>
        <form action="login.php" method="POST">
        <label for="login">Login</label>
        <div class="input-group mb-3">
            <div class="input-group-text">
                <input type="text" name="login" id="login" class="form-control" aria-label="login">
            </div>
        </div>

        <label for="login">Password</label>
        <div class="input-group">
            <div class="input-group-text">
                <input type="password" id="password" name="password" class="form-control" aria-label="password">
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