<?php 
require ('index.php');
?>

<div class="header">
    <h6>Add Course</h6>
</div>
<div class="header_fixed">
    <label for="c_name" class="col-form-label required">Course Name</label><br>
    <input type="text" name="crs_name" required placeholder="Enter Course Name" class="c-txt"><br>
    <label for="descript" class="col-form-label required">Description</label><br>
    <input type="text" name="descript" required placeholder="Enter Course Description" class="c-txt"><br>
    <label for="price" class="col-form-label required">Course Fee</label><br>
    <input type="text" name="price" required placeholder="Enter Course Fee" class="c-txt"><br>
    <div class="btn"><button class="btn1">Close</button>
    <button class="btn2">Save</button></div>
</div>

</body>
</html>