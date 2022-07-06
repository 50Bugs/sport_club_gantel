<?php
function connection(){
    /*
    $HOST = "localhost";
    $USER = "id16757009_rooot";
    $PASS = "Fh]zS\>>\8T@I!je";
    $DB = "id16757009_kit";
    */
    $HOST = "193.93.216.145:3306";
    $USER = "sqlkn19_1_kts";
    $PASS = "kn19_kts";
    $DB = "sqlkn19_1_kts";

    $con=mysqli_connect($HOST, $USER, $PASS, $DB);

    if (!$con) {
        exit("Помилка з'єднання: (".mysqli_connect_errno()
            .")".mysqli_connect_error());
    }

    return $con;
}

function Execute($sql)
{
    $con = connection();
    mysqli_query($con, $sql)
    or die(mysqli_error());
    mysqli_close($con);
}

function Get($sql)
{
    $con = connection();

    $result = mysqli_query($con, $sql);
    /*
    $result = array();
    
    for ($i = 0; $i < mysqli_num_rows($r); $i++) {
        $f = mysqli_fetch_array($r);
        array_push($result,$f);
    }
    */

    mysqli_close($con);
    return $result;
}

?>