<?php

//   check login
function checkLogin($username, $password) {
    echo "index data ";
    echo $username;
    echo $password;
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
    $sql = "select * from users where name='$username' and password='$password'";
    echo "database data ";
    echo $username;
    echo $password;
    $result = $dbconn->query($sql);
    foreach ($result as $value) {
        echo "zanina data ";

         $bdname = $value['name'];
         $bdpassword = $value['password'];
         echo $bdname;
         echo $bdpassword;
//        if ($username == $bdname && $password == $bdpassword) {
//            return true;
//        } else {
//            return false;   
//        }
    }
}
function addBike($username, $password) {
    echo "index data ";
    echo $username;
    echo $password;
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
    $sql = "select * from users where name='$username' and password='$password'";
    echo "database data ";
    echo $username;
    echo $password;
    $result = $dbconn->query($sql);
    foreach ($result as $value) {
        echo "zanina data ";

         $bdname = $value['name'];
         $bdpassword = $value['password'];
         echo $bdname;
         echo $bdpassword;
//        if ($username == $bdname && $password == $bdpassword) {
//            return true;
//        } else {
//            return false;   
//        }
    }
}

?>