<?php include('include/header.php') ?>
<div class="container-fluid bg-info ">
  <div class="row">
    <div class="col-sm-12">
      <h2 class="text-center" style="padding-top:30px; padding-bottom:30px;">About Page...</h2>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
        <h2 class="text-center">ABOUT</h2>
        <?php
        $sql = "SELECT * FROM about";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
        ?>
          <p>
            <?php echo $row['description']; ?>
          </p>
        <?php } ?>
      </div>
    </div>
    <div class="col-sm-12">
      <h2 class="text-center">MISSION</h2>
      <div class="row">
        <?php
        $sql = "SELECT * FROM mission";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
        ?>
          <div class="col-sm-6">
            <img src="admin/image/mission/<?php echo $row['image']; ?>" class=" img-thumbnail" alt="">
          </div>
          <div class="col-sm-6">
            <p>
              <?php echo $row['description']; ?>
            </p>
          </div>
        <?php } ?>
      </div>
    </div>
  <div class="col-sm-12"  style="margin-bottom:20px;">
    <h2 class="text-center">VISSION</h2>
    <div class="row">
      <?php
      $sql = "SELECT * FROM vission";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
      ?>
        <div class="col-sm-6">
          <p>
            <?php echo $row['description']; ?>
          </p>
        </div>
        <div class="col-sm-6">
          <img src="admin/image/vission/<?php echo $row['image']; ?>" class=" img-thumbnail" alt="">
        </div>
      <?php } ?>
    </div>
  </div>
</div>

</div>
</div>
</div>
<?php include('include/footer.php') ?>