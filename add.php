<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add record</title>
</head>

<body>
    <center>
        <h1>Add record</h1>
        <form action="add.php" method="POST">
        <label for="name">Name</label>
        <div class="input-group mb-3">
            <div class="input-group-text">
                <input type="text" name="name" id="name" class="form-control" aria-label="name">
            </div>
        </div>
        <label for="coach">Coach</label>
        <div class="input-group">
            <div class="input-group-text">
                <input type="text" id="coach" name="coach" class="form-control" aria-label="password">
            </div>
        </div>
        <label for="price">Price</label>
        <div class="input-group">
            <div class="input-group-text">
                <input type="number" id="price" name="price" class="form-control" aria-label="password">
            </div>
        </div>
        <label for="photo">Photo</label>
        <div class="input-group">
            <div class="input-group-text">
                <input type="text" id="photo" name="photo" class="form-control" aria-label="password">
            </div>
        </div>
        <label for="days">Days</label>
        <div class="input-group">
            <div class="input-group-text">
                <input type="text" id="days" name="days" class="form-control" aria-label="password">
            </div>
        </div>
        <label for="sport_inventory">Sport inventory</label>
        <div class="input-group">
            <div class="input-group-text">
                <input type="text" id="sport_inventory" name="sport_inventory" class="form-control" aria-label="password">
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
<?php
if (isset($_REQUEST['confirm'])) {
    include("db.php");
    Execute("INSERT INTO Section (name, coach, price, photo, days, sport_inventory) VALUES ('".$_REQUEST['name']."', '".$_REQUEST['coach']."', ".$_REQUEST['price'].", '".$_REQUEST['photo']."', '".$_REQUEST['days']."', '".$_REQUEST['sport_inventory']."')");
    echo "Successfully";
}
?>