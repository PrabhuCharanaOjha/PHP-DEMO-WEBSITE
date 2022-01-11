<?php
include('dbconnection.php');
//error_reporting(0);
?>
<?php
if (isset($_REQUEST['Msg_submit'])) {

  #valid first name
  $F_Name = trim($_POST["Name"]);
  if (empty($F_Name)) {
    $cnameerr = '<div class="alert alert-danger mt-3" roll=""alert>Please enter a first name.</div>';
  } elseif (!filter_var($F_Name, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
    $cnameerr = '<div class="alert alert-danger mt-3" roll=""alert>Please enter a valid name.</div>';
  } else {
    $Name = $F_Name;
  }

  #valid email
  $validEmail = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
  $u_Email = trim($_POST["Email"]);
  if (empty($u_Email)) {
    $cemailerr = 'div class="alert alert-danger mt-3" roll=""alert>Email is Required</div>';
  } elseif (!preg_match($validEmail, $u_Email)) {
    $cemailerr = '<div class="alert alert-danger mt-3" roll=""alert>Invalid Email Address</div>';
  } else {
    $Email = $u_Email;
  }

  #valid message
  $c_messages = trim($_POST["Message"]);
  if (empty($c_messages)) {
    $cmsgerr = '<div class="alert alert-danger mt-3" roll=""alert>Please enter Message</div>';
  } else {
    $Message = $c_messages;
  }

  #inserting data
  if (empty($cnameerr) && empty($cemailerr) &&  empty($cmsgerr)) {
    $Name = $_REQUEST['Name'];
    $Email = $_REQUEST['Email'];
    $Message = $_REQUEST['Message'];

    $sql = "INSERT INTO contact(name,email,mobile,message) VALUES('$Name','$Email','$Number','$Message')";
    if ($conn->query($sql)) {
      $msg = '<div class="alert alert-success mt-3" roll=""alert>Request Upadate Successfully</div>';
    } else {
      $msg = '<div class="alert alert-danger mt-3" roll="alert">Update faild</div>';
    }
  }
}
?>
<section id="contact">
  <div class="container">
    <div class="row text-center" data-scroll-reveal="enter from the bottom after .5s">
      <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
        <h2 style="color:#000;">CONTACT US</h2>
        <br />
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 cont-div">
        <form method="POST">
          <div class="form-group" data-scroll-reveal="enter from the left after .6s">
            <input type="text" name="Name" class="form-control" placeholder="Your Name" />
          </div>
          <div class="form-group" data-scroll-reveal="enter from the left after .7s">
            <input type="text" name="Email" class="form-control" placeholder="Your Email" />
          </div>
          <div class="form-group" data-scroll-reveal="enter from the left after .8s">
            <textarea name="Message" id="message" class="form-control" style="min-height: 100px" placeholder="Message"></textarea>
          </div>
          <div class="form-group" data-scroll-reveal="enter from the left after .9s">
            <input type="submit" name="Msg_submit" class="btn btn-style-2" value="Submit Request">
          </div>
          <?php if (isset($msg)) {
            echo $msg;
          } ?>
        </form>
      </div>
      <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1" data-scroll-reveal="enter from the right after .8s">
        <h3><strong>OUR LOCATION </strong></h3>
        <p>
          We Help the people by helping us. Come forward for social cause. Our main projects are Digital Education, Skill India, Disability Help, Social Awareness.
        </p>
        <p>
          <strong>ADDRESS :</strong> 234/90, cuttack odisha, india.
        </p>
        <br />
        <form role="form">
          <div class="input-group">
            <input type="text" class="form-control" autocomplete="off" placeholder="Enter your email" required="" />
            <span class="input-group-btn">
              <button class="btn btn-primary" type="button">
                Subdcribe!
              </button>
            </span>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>