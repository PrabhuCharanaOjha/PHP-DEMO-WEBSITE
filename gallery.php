<?php include('include/header.php') ?>
<div class="container-fluid bg-info ">
  <div class="row">
    <div class="col-sm-12">
      <h2 class="text-center" style="padding-top:30px; padding-bottom:30px;">Gallery Page...</h2>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="container">
    <div class="row pad-low" data-scroll-reveal="enter from the top after .7s">
      <?php
      $sql = "SELECT * FROM gallery";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
      ?>

          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
            <div class="recent-events-wrap" style="margin-bottom:20px;">
              <img class="img-responsive" src="admin/image/gallery/<?php echo $row['image']; ?>" alt="" />
              <div class="overlay">
                <a class="preview" href="admin/image/gallery/<?php echo $row['image']; ?>"><i class="fa fa-eye fa-5x"></i></a>
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