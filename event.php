<?php include('include/header.php') ?>
<div class="container-fluid bg-info ">
  <div class="row">
    <div class="col-sm-12">
      <h2 class="text-center" style="padding-top:30px; padding-bottom:30px;">Event Page...</h2>
    </div>
  </div>
</div>

<div class="container-fluid" id="budget">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1 class="text-center">OUR EVENTS</h1>
      </div>
    </div>
    <div class="row pad-low" data-scroll-reveal="enter from the top after .6s">
      <?php
      $sql = "SELECT * FROM event";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
      ?>

          <div class="col-lg-4">
            <div class="media text-center">
              <img class="card-img-top" src="admin/image/event/<?php echo $row['image']; ?>" height="200">
              <div class="media-body">
                <h3 class="media-heading"><?php echo $row['heading']; ?></h3><br>
                <div class="btn btn-style-4 btn-lg"><?php echo $row['date']; ?></div>
                <p class="card-text text-justify overflow-auto textheight" style="margin-top:20px;"><?php echo $row['description']; ?></p><br>
              </div>
            </div>
          </div>

      <?php
        }
      }
      ?>

    </div>
  </div><br>
</div>
<?php include('include/footer.php') ?>