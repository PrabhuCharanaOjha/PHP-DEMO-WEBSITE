<?php include('include/header.php') ?>
<div class="container-fluid bg-info ">
  <div class="row">
    <div class="col-sm-12">
      <h2 class="text-center" style="padding-top:30px; padding-bottom:30px;">Volunteer Page...</h2>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="container">
    <div class="row">
      <?php
      $sql = "SELECT * FROM team";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
      ?>

          <div class="col-sm-3">
            <div class="card text-center" style="margin-bottom:20px;margin-top:20px;">
              <img class="card-img-top" src="admin/image/team/<?php echo $row['image']; ?>" height="250" alt="Card image cap">
              <div class="card-body">
                <h3><?php echo $row['name']; ?></h3>
                <p class="card-text"><?php echo $row['designation']; ?></p>
              </div>
            </div>
          </div>

      <?php
        }
      }
      ?>

    </div>
  </div>
</div>
<?php include('include/footer.php') ?>