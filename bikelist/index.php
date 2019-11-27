<?php
$errorname = $errorpassword = "";
$username = $userpassword = "";
$errormsg = '';
include_once 'bd_conection.php';
//include_once 'test.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        $errorname = "Name is required";
    } else {
        $username = validate($_POST["username"]);
    }
    if (empty($_POST["userpassword"])) {
        $errorpassword = "Password is required";
    } else {
        $userpassword = validate($_POST["userpassword"]);
    }
    $valid = checkLogin($username, $userpassword);
    if ($valid) {
        header("location:bikelist.php");
    } else {
        $errormsg = 'Username or password is wrong.';
    }
}

function validate($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap-theme.min.css" type="text/css" rel="stylesheet">
        <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
        <link href="css/style.css" type="text/css" rel="stylesheet">
    </head>
    <body>  
        <div class="container">  
            <br><br><br><br><br>
            <div class="jumbotron col-sm-4 col-lg-offset-4" style="background-color:lavender;">
                <?= $errormsg ?>
                <form action="" method="POST">
                    <label for="rent" class="col-lg-offset-2"><h2>Rent A Bike</h2></label>
                    <br>
                    <label for="login" class="col-lg-offset-3"><h3>User Login</h3></label>
                    <br>
                    <input type="text" class="col-lg-offset-0 col-xs-12 login_text" name="username" placeholder="User name">
                    <?php echo $errorname; ?>
                    <br><br><br>
                    <input type="password" class="col-lg-offset-0 col-xs-12 login_text" name="userpassword" placeholder="User password">
                    <?php echo $errorpassword; ?>
                    <br><br><br>
                    <input type="Submit" value="submit" class="btn btn-success col-lg-offset-0 col-xs-12 login_text">
                    <br>
                    <br>
                    <br>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" value="1"> Remember me
                        </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#">Forget password?</a>
                    </div> 
                </form>
            </div>
        </div>
        <?php
        include_once './footer.php';
        ?>
        
