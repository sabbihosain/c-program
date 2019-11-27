<?php
include_once './header.php';
include_once './bd_conection.php';
// define variables and set to empty values
$errormodel = $errorbrand = $errorlicence = $errorrent = $errorpenalty = $errorimage = "";
$model = $brand = $licence = $rent = $penalty = $image = "";
$errormsg = '';
$datavalid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    print_r($_POST);
//    die;
    if (empty($_POST["model"])) {
        $datavalid = false;
        $errormodel = "Model is required";
    } else {
        $model = validate($_POST["model"]);
    }
    if (empty($_POST["brand"])) {
        $datavalid = false;
        $brand = "Brand is required";
    } else {
        $brand = validate($_POST["brand"]);
    }
    if (empty($_POST["licence"])) {
        $datavalid = false;
        $errorlicence = "Licence_no is required";
    } else {
        $licence = validate($_POST["licence"]);
    }
    if (empty($_POST["rent"])) {
        $datavalid = false;
        $errorrent = "Rent_per_hours is required";
    } else {
        $rent = validate($_POST["rent"]);
    }
    if (empty($_POST["penalty"])) {
        $datavalid = false;
        $errorpenalty = "Penalty_per_hours is required";
    } else {
        $penalty = validate($_POST["penalty"]);
    }
    if (empty($_POST["image"])) {
        $datavalid = false;
        $errorimage = "Image is required";
    } else {
        $image = validate($_POST["image"]);
    }
    if ($datavalid) {
        $valid = addBike($model, $brand, $licence, $rent, $penalty, $image);
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
    <br>
    <?= $errormsg ?>
    <form action="" method="POST" enctype="multipart/form_data">
        <div class="jumbotron col-sm-6 col-lg-offset-4" style="background-color:lavender;">

            <label for="rent" class="col-lg-offset-4"><h2>Add Bike</h2></label>
            <br><br>
            <label for="pwd" class="col-lg-offset-0"><h4>Bike Model:</h4></label>
            <input type="text" class="" name="model" placeholder="Model" style="margin:0px 0px 0px 90px; padding: 5px 0px 5px 0px;"> 
            <br>
            <?php echo $errormodel; ?>
            <br>
            <label for="pwd" class="col-lg-offset-0"><h4>Brand:</h4></label>
            <input type="text" class="" name="brand" placeholder="Brand" style="margin:0px 0px 0px 130px; padding: 5px 0px 5px 0px;">
            <br>
            <?php echo $errorbrand; ?>
            <br>
            <label for="pwd" class="col-lg-offset-0"><h4>Licence_No:</h4></label>
            <input type="text" class="" name="licence" placeholder="Licence" style="margin:0px 0px 0px 83px; padding: 5px 0px 5px 0px;"> 
            <br>
            <?php echo $errorlicence; ?>
            <br>
            <label for="pwd" class="col-lg-offset-0"><h4>Rent_Per_Hour:</h4></label>
            <input type="text" class="" name="rent" placeholder="Rent_Per_Hour" style="margin:0px 0px 0px 53px; padding: 5px 0px 5px 0px;">   
            <br>
            <?php echo $errorrent; ?>
            <br>
            <label for="pwd" class="col-lg-offset-0"><h4>Penalty_Per_Hour:</h4></label>
            <input type="text" class="" name="penalty" placeholder="Penalty_Per_Hour" style="margin:0px 0px 0px 30px; padding: 5px 0px 5px 0px;"> 
            <br>
            <?php echo $errorpenalty; ?>
            <br>
            <label for="pwd" class="col-lg-offset-0"><h4>Choose Image:</h4></label>
            <input type="file" class="" name="image"  placeholder="" style="margin:0px 0px 0px 0px; padding: 5px 0px 5px 0px;"> 
            <br>
            <?php echo $errorimage; ?>
            <br>

            <input type="submit" value="Add Bike" class="btn btn-success col-lg-offset-7">
        </div>
    </form>
</div>
<?php
include_once './footer.php';
?>
