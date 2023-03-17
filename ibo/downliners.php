<?php 
require('header.php');
$uname= $_SESSION['USER_NAME'];
$sql="select * from customer where enroller_username = '$uname'";
$res=mysqli_query($con,$sql);
?>

<style>
body{
  justify-content: center;
  align-items: center;
  background-color: #fff;
}

table{
  border: 1px solid #151314;
  text-align: center;
  border-radius: 0px;
  background: linear-gradient(145deg,#fff,rgb(221, 220, 220));
  box-shadow: 1px 1px 4px #1f1f1f,-1px -1px 4px #474747;
  margin-left: 400px;
}

h3 {
    font-weight: 800;
    padding-top: 40px;
    padding-bottom: 40px;
    padding-right: 200px;
    font-size: 40px;
    color: rgb(63, 62, 62);
    padding-left: 500px;
  }

  th,td {
      padding: 5px 12px;
      padding-left: 5px;
      padding-top: 10px;
      padding-bottom: 5px;
  }

  td {
      padding-left: 60px;
      padding-right: 60px;
      padding-top: 20px;
      padding-bottom: 10px;
  }

  th {
      background: rgb(77, 77, 77);
      text-align: center;
      padding-bottom: 15px;
      padding-top: 15px;
      color: #fff;
      text-transform: uppercase;
      font: 1em sans-serif;
      font-weight: 700;
  }

  table.table {
   margin-bottom: auto;
   margin-right: auto;
 }

 th:hover{
   background: rgb(27, 22, 31);
   color: #fff;
   box-shadow: 1px 1px 4px #1f1f1f,-1px -1px 4px #474747;
 }

 td:hover{
   background: rgba(169, 162, 175, 0.512);
   color: #000;
   font-weight: 700;
   box-shadow: 1px 1px 4px #1f1f1f,-1px -1px 4px #474747;
 }
</style>


<!-- Main Content -->
<div class="main-content">
    <h3 style="text-align: center;">Downliners</h3>
    <table class="table">
      <?php echo $uname ?>
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Academy id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Username</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    $i=1;
    while($row=mysqli_fetch_assoc($res)){?>
    <tr>
      <th scope="row"><?php echo $i++?></th>
      <td><?php echo $row['academy_id']?></td>
      <td><?php echo $row['f_name']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['tel_no']?></td>
      <td><?php echo $row['username']?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
<!-- End Main Content -->

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>