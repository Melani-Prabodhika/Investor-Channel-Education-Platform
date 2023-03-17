<?php 
require ('index.php');
?>

<div class="header">
    <h6>Add Book</h6>
</div>
<div class="header_fixed">
    <label for="c_name" class="col-form-label required">Book Name</label><br>
    <input type="text" name="crs_name" required placeholder="Enter Book Name" class="c-txt"><br>
    <label for="descript" class="col-form-label required">PDF</label><br>
    <input type="file" name="image" class="form-control" class="c-txt">
    <div class="btn"><button class="btn1">Close</button>
    <button class="btn2">Save</button></div>
</div>

</body>
</html>