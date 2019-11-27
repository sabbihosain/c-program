<?php

//   check login
function checkLogin($username, $userpassword) {
    $dbconn = null;
    $dbuser = "root";
    $dbpass = "";
    $dsh = "mysql:dbname=rent_bike;host=localhost";
    $option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,];
    try {
        $dbconn = new PDO($dsh, $dbuser, $dbpass, $option);
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
    $sql = "select * from users where name='$username' and password='$userpassword'";
    $result = $dbconn->query($sql);
    foreach ($result as $value) {
        $bdname = $value['name'];
        $bdpassword = $value['password'];
        if ($username == $bdname && $userpassword == $bdpassword) {
            return true;
        } else {
            return false;
        }
    }
}

function doregistration($username, $userpassword, $userfullname, $usertype) {
    $dbconn = null;
    $dbuser = "root";
    $dbpass = "";
    $dsh = "mysql:dbname=rent_bike;host=localhost";
    $option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,];
    try {
        $dbconn = new PDO($dsh, $dbuser, $dbpass, $option);
        $insertquery = "insert into users
                    (name, password,fullname,usertype)
                    VALUES
                    (
                        '$username', '$userpassword','$userfullname','$usertype'
                    );";
        $dbconn->query($insertquery);
        return '';
//        return true;
    } catch (PDOException $ex) {
        return $ex->getMessage();
    }
}
function addbike($model, $brand, $licence, $rent,$penalty,$image) {
    $dbconn = null;
    $dbuser = "root";
    $dbpass = "";
    $dsh = "mysql:dbname=rent_bike;host=localhost";
    $option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,];
    try {
        $dbconn = new PDO($dsh, $dbuser, $dbpass, $option);
        $insertquery = "insert into bikes
                    (model, brand,licence_no,rent_per_hour,penalty_per_hour,images)
                    VALUES
                    (
                        '$model', '$brand','$licence','$rent','$penalty','$image'
                    );";
        $dbconn->query($insertquery);
        return '';
//        return true;
    } catch (PDOException $ex) {
        return $ex->getMessage();
    }
}

?>