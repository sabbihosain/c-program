<?php
include_once './header.php';
?>
<div class="container">
    <br><br><br><br>
    <div class="jumbotron col-sm-6 col-lg-offset-4" style="background-color:lavender;">
        <label for="pwd" class="col-lg-offset-0"><h4>Phone:</h4></label>
        <input type="text" class="col-lg-offset-2" placeholder="Phone">
        <button type="button" class="btn btn-success col-lg-offset-1">Search</button>
        <br>
        <label for="pwd" class="col-lg-offset-0"><h4>Name:</h4></label>
        <input type="text" id="name" placeholder="Name" class="col-lg-offset-2">
        <br>
        <label for="pwd" class="col-lg-offset-0"><h4>Nid:</h4></label>
        <input type="text" id="name" placeholder="Nid" class="col-lg-offset-2">
        <br>
        <label for="pwd" class="col-lg-offset-0"><h4>Licence:</h4></label>
        <input type="text" id="name" placeholder="Licence" class="col-lg-offset-1">
        <br>
        <label for="pwd" class="col-lg-offset-0"><h4>Bike:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4></label>
        <select style="padding:5px 10px 5px 10px; margin:3px 0px 3px 10px;"><option value="bajajpulser150">Bajaj Pulser 150</option>
            <option value="suzukizixxer150">Suzuki Zixxer 150</option>
            <option value="suzukizixxersf150">Suzuki Zixxer SF 150</option>
            <option value="herohunk150">Hero Hunk 150</option>
            <option value="hondacbtrigger">HondaCB Trigger</option>
            <option value="tvcapache4V">TVC Apache 4V</option>
        </select>
        <br>
        <label for="pwd" class="col-lg-offset-0"><h4>Date:</h4></label>
        <input type="text"  id="name" placeholder="Date" class="col-lg-offset-2">
        <br>
        <label for="pwd" class="col-lg-offset-0"><h4>Pick Up Time:</h4></label>
        <input type="text"  id="name" placeholder="Pike Up Time" class="col-lg-offset-0">
        <br>
        <label for="pwd" class="col-lg-offset-0"><h4>Drop Off Time:</h4></label>
        <input type="text"  id="name" placeholder="Drop Off Time" class="col-lg-offset-0">
        <br>
        <button type="button" class="btn btn-success col-lg-offset-6" style="padding:8px 20px 8px 20px;"><a href="print.php" style="color:white;">Rent</a></button>
    </div>
</div>
<?php
include_once './footer.php';
?>