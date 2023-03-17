<?php 
require ('index.php');
?>

<div class="header">
    <h6>Add Question</h6>
</div>
<div class="header_fixed">
<label for="c_name" class="col-form-label required">Module Name</label><br>
    <select name="paper" id="areaCode" class="txt" required style="color: #222426d4;">
                    <option value="" data-code="">Select Module</option>
                    <option value="italy" data-code="+91">Italy</option>
                    <option value="srilanka" data-code="+94">Sri Lanka</option>
                    <option value="us" data-code="+95">United States</option></select><br>
    <label for="c_name" class="col-form-label required">Paper Name</label><br>
    <select name="paper" id="areaCode" class="txt" required style="color: #222426d4;">
                    <option value="" data-code="">Select Paper</option>
                    <option value="italy" data-code="+91">Italy</option>
                    <option value="srilanka" data-code="+94">Sri Lanka</option>
                    <option value="us" data-code="+95">United States</option></select><br>
    <label for="descript" class="col-form-label required">Question</label><br>
    <input type="text" name="descript" required placeholder="Enter Question" class="c-txt"><br>
    <label for="price" class="col-form-label required">Correct Answer</label><br>
    <input type="text" name="price" required placeholder="Enter Answer" class="c-txt"><br>
    <label for="price" class="col-form-label required">Option 01</label><br>
    <input type="text" name="price" required placeholder="Enter Answer" class="c-txt"><br>
    <label for="price" class="col-form-label required">Option 02</label><br>
    <input type="text" name="price" required placeholder="Enter Answer" class="c-txt"><br>
    <label for="price" class="col-form-label required">Option 03</label><br>
    <input type="text" name="price" required placeholder="Enter Answer" class="c-txt"><br>
    <label for="descript" class="col-form-label required">Image</label><br>
    <input type="file" name="image" class="form-control" class="c-txt">
    <div class="btn"><button class="btn1">Close</button>
    <button class="btn2">Save</button></div>
</div>

</body>
</html>