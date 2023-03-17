<?php 
require ('index.php');
?>

<div class="header">
    <h6>Add Session</h6>
</div>
<div class="header_fixed">
    <label for="descript" class="col-form-label required">Topic</label><br>
    <input type="text" name="descript" required placeholder="Enter Topic" class="c-txt"><br>
    <label for="descript" class="col-form-label required">Date & Time</label><br>
    <input type="date" name="date" required placeholder="Enter Question" class="c-txt" style="color: #222426d4;"><br>
    <label for="descript" class="col-form-label required">Host Name</label><br>
    <input type="text" name="descript" required placeholder="Enter Host Name" class="c-txt"><br>
    <label for="c_name" class="col-form-label required">Language</label><br>
    <select name="paper" id="areaCode" class="txt" required style="color: #222426d4;">
                    <option value="" data-code="">Select Language</option>
                    <option value="italy" data-code="+91">Italy</option>
                    <option value="srilanka" data-code="+94">Sri Lanka</option>
                    <option value="us" data-code="+95">United States</option></select><br>
    <label for="descript" class="col-form-label required">Zoom Link</label><br>
    <input type="text" name="descript" required placeholder="Enter Link" class="c-txt"><br>
    <label for="price" class="col-form-label required">Meeting ID</label><br>
    <input type="text" name="price" required placeholder="Enter Meeting ID" class="c-txt"><br>
    <label for="price" class="col-form-label required">Meeting Password</label><br>
    <input type="text" name="price" required placeholder="Enter Meeting Password" class="c-txt"><br>
    <div class="btn"><button class="btn1">Close</button>
    <button class="btn2">Save</button></div>
</div>

</body>
</html>