<?php
include_once './header.php';
?>

<div class="container">  
    <br><br><br><br><br>
    <div class="jumbotron col-sm-4 col-lg-offset-4" style="background-color:lavender;">
        <label for="pwd" class="col-lg-offset-3"><h2>Report</h2></label>
        <br><br>
        <label for="pwd" class="col-lg-offset-0"><h4>From:</h4></label>
        <input type="text" class="col-lg-offset-1" id="name" placeholder="">
        <br>
        <label for="pwd" class="col-lg-offset-0"><h4>To:</h4></label>
        <input type="text" class="col-lg-offset-2" id="name" placeholder="">
        <br>
        <label for="pwd" class="col-lg-offset-0"><h4>Type:&nbsp;&nbsp;&nbsp;</h4></label>
        <select style="padding:5px 47px 5px 47px; margin:3px 0px 3px 10px;">
            <option value="income">Income</option>
            <option value="expense">Expense</option>
            <option value="both">Both</option>
        </select>
        <br><br>
        <button type="button" class="btn btn-success col-lg-offset-7"><a href="get_report.php" style="color: white;"> Get Report</a></button>
    </div>
</div>
<?php
include_once './footer.php';
?>