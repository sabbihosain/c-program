<?php
include_once './header.php';
?>

<div class="container">  
    <br><br><br><br><br>
    <div class="jumbotron col-sm-5 col-lg-offset-4" style="background-color:lavender;">
        <br><br>
        <label for="pwd" class="col-lg-offset-0"><h4>From Date:</h4></label>
        <input type="date" name="fromday" class="col-lg-offset-2" style="margin:0px 0px 0px 73px; padding: 5px 20px 5px 0px;">
        <br>
        <label for="pwd" class="col-lg-offset-0"><h4>To Date:</h4></label>
        <input type="date" name="today" class="col-lg-offset-2" style="margin:0px 0px 0px 95px; padding: 5px 20px 5px 0px;">
        <br>
        <label for="pwd" class="col-lg-offset-0"><h4>Monthly Income:</h4></label>
        <input type="text"  class="col-lg-offset-1" style="padding: 5px 0px 5px 0px;">
        <br>
        <label for="pwd" class="col-lg-offset-0"><h4>Daily Expense:</h4></label>
        <input type="text"  class="col-lg-offset-1" style="margin:0px 0px 0px 42px; padding: 5px 0px 5px 0px;">
    </div>
</div>
<?php
include_once './footer.php';
?>


