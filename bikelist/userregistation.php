<?php
include_once './header.php';
include_once './bd_conection.php';
// define variables and set to empty values
$errorname = $errorpassword = $errorfullname = $errorusertype = "";
$username = $userpassword = $userfullname = $usertype = "";
$errormsg = '';
$datavalid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    print_r($_POST);
//    die;
    if (empty($_POST["name"])) {
        $datavalid = false;
        $errorname = "Name is required";
    } else {
        $username = validate($_POST["name"]);
    }
    if (empty($_POST["password"])) {
        $datavalid = false;
        $errorpassword = "Password is required";
    } else {
        $userpassword = validate($_POST["password"]);
    }
    if (empty($_POST["fullname"])) {
        $datavalid = false;
        $errorfullname = "Fullname is required";
    } else {
        $userfullname = validate($_POST["fullname"]);
    }
    if (empty($_POST["usertype"])) {
        $datavalid = false;
        $errorusertype = "Usertype is required";
    } else {
        $usertype = validate($_POST["usertype"]);
    }
    if ($datavalid) {
        $valid = doregistration($username, $userpassword, $userfullname, $usertype);
        if ($valid === '') {
//    if ($valid) {
            header("location:bikelist.php");
        } else {
            $errormsg = $valid;
        }
    }
}

function validate($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<div class="container">  
    <br><br>
    <?= $errormsg ?>
    <form action="" method="POST">
        <div class="jumbotron col-sm-5 col-lg-offset-4" style="background-color:lavender;">
            <br>
            <label for="rent" class="col-lg-offset-2"><h2>Add A New User</h2></label>
            <br><br>
            <label for="pwd" class="col-lg-offset-0"><h4>User Name:</h4></label>
            <input type="text" class="col-lg-offset-1" name="name" placeholder="Name" style="margin:0px 0px 0px 18px;"> 
            <br>
            <?php echo $errorname; ?>
            <br><br>
            <label for="pwd" class="col-lg-offset-0"><h4>Password:</h4></label>
            <input type="password" class="col-lg-offset-1" name="password" placeholder="Password" style="margin:0px 0px 0px 30px;">
            <?php echo $errorpassword; ?>
            <br><br>

            <label for="pwd" class="col-lg-offset-0"><h4>FullName:</h4></label>
            <input type="text" class="col-lg-offset-1" name="fullname" placeholder="Fullname" style="margin:0px 0px 0px 32px;">           
            <?php echo $errorfullname; ?>
            <br><br>
            <label for="pwd" class="col-lg-offset-0"><h4>User Type:</h4></label>
            <select name="usertype" style="padding:4px 80px 4px 5px;" class="col-lg-offset-1">select one
                <?php echo $errorusertype; ?>
                <!--<option>select one</option>--> 
                <option value="admin">Admin</option> 
                <option value="user">User</option> 
            </select>
            <br><br>
            <input type="submit" value="Createuser" class="btn btn-success col-lg-offset-7">
        </div>
    </form>
</div>
<?php
include_once './footer.php';
?>
