<?php
include_once './header.php';
?>

<div class="container">  
    <br><br><br><br><br>
    <div class="jumbotron col-sm-5 col-lg-offset-4" style="background-color:lavender;">
        <label for="pwd" class="col-lg-offset-2"><h2>Expense</h2></label>
        <br><br>
        <label for="pwd" class="col-lg-offset-0"><h4>Date:</h4></label>
        <input type="date" class="col-lg-offset-2" name="fromday" style="margin:0px 0px 0px 45px; padding:4px 22px 4px 0px;">
        <br>
         <label for="pwd" class="col-lg-offset-0"><h4>Date:</h4></label>
        <input type="text" class="col-lg-offset-2" name="fromday" style="margin:0px 0px 0px 45px; padding:4px 0px 4px 0px;">
        <br>
        <label for="pwd" class="col-lg-offset-0"><h4>Reason:</h4></label>
        <select style="padding:6px 70px 6px 0px; margin:7px 0px 7px 20px;">
            <option value="rent">Rent</option>
            <option value="maintenance">Maintenance</option>
            <option value="salary">Salary</option>
            <option value="daily">Daily</option>
            <option value="electricity">Electricity</option>
        </select>
        <br>
        <label for="pwd" class="col-lg-offset-0"><h4>Note:</h4></label>
        <input type="text" class="col-lg-offset-1" style=" margin:4px 0px 4px 45px; padding:4px 0px 4px 0px;">
        <br><br>
        <button type="button" class="btn btn-success col-lg-offset-5"><a href="addexpense.php" style="color: white;">Add Expense</a></button>
    </div>
</div>
<?php
include_once './footer.php';
?>
