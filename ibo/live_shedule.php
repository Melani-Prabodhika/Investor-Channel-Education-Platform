<?php 
require('header.php');
$uname= $_SESSION['USER_NAME'];
$sql="select * from live_shedule order by date_time asc";
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
  margin-left: 320px;
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
      border: 1px;
      padding-left: 4px;
      padding-top: 20px;
      padding-right: 4px;
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
    <div class="col-12">
        <h3 style="text-align: center;">Weekly Schedule</h3>
        <div class="filter">
          <table>
              <tr>
                  <th>Date & Time</th>
                  <th>Topic Covered</th>
                  <th>Hosted By</th>
                  <th>English</th>
                  <th style="padding-right: 0;">Access Link</th>
                  <th>Meeting ID</th>
                  <th>Password</th>
              </tr>
              <?php 
                while($row=mysqli_fetch_assoc($res)){?>
              <tr>
                <td><?php echo $row['date_time']?></td>
                <td><?php echo $row['topic']?></td>
                <td><?php echo $row['host_name']?></td>
                <td><?php echo $row['language']?></td>
                <td><?php echo $row['zoom_link']?></td>
                <td><?php echo $row['meeting_id']?></td>
                <td><?php echo $row['password']?></td>
              </tr>
              <?php } ?>
          </table>
      </div>
    </div>
</div>
<!-- End Main Content -->

</body>
</html>