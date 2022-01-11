<?php
error_reporting(0);

if (isset($_POST['upload'])) {
  if (($_REQUEST['Name'] == "") || ($_REQUEST['Email'] == "") || ($_REQUEST['Number'] == "") || ($_REQUEST['State'] == "") || ($_REQUEST['City'] == "") || ($_REQUEST['Blood'] == "")) {
    $msg = '<div class="alert alert-warning" roll="alert">please fill all fields</div>';
  } else {
    $Name = $_REQUEST['Name'];
    $Email = $_REQUEST['Email'];
    $Number = $_REQUEST['Number'];
    $State = $_REQUEST['State'];
    $City = $_REQUEST['City'];
    $Blood = $_REQUEST['Blood'];

    $sqlimg = "INSERT INTO join_us (name,email,mobile,state,city,blood) VALUES ('$Name','$Email','$Number','$State','$City','$Blood')";

    if ($conn->query($sqlimg)) {
      $msg = '<div class="alert alert-success mt-3" roll=""alert>Request Upadate Successfully</div>';
    } else {
      echo "image upload failed";
      $msg = '<div class="alert alert-danger mt-3" roll="alert">Update faild</div>';;
    }
  }
}
?>
<form method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <input type="text" name="Name" class="form-control" placeholder="Enter Your Name" />
  </div>
  <div class="form-group">
    <input type="email" name="Email" class="form-control" placeholder="Your Email" />
  </div>
  <div class="form-group">
    <input type="number" name="Number" class="form-control" placeholder="Enter Your Mobile Number" />
  </div>
  <div class="form-group">
    <input type="text" name="State" class="form-control" placeholder="Enter Your State" />
  </div>
  <div class="form-group">
    <input type="text" name="City" class="form-control" placeholder="Enter Your City" />
  </div>
  <div class="form-group">
    <select name="Blood" class="form-control">
      <option value="Select" selected="selected">Blood Group</option>
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="A1+">A1+</option>
      <option value="A1-">A1-</option>
      <option value="A1B+">A1B+</option>
      <option value="A1B-">A1B-</option>
      <option value="A2+">A2+</option>
      <option value="A2-">A2-</option>
      <option value="A2B+">A2B+</option>
      <option value="A2B-">A2B-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="Bombay Blood Group">Bombay Blood Group</option>
      <option value="INRA">INRA</option>
      <option value="Golden blood">Golden Blood (Rh - null)</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
    </select>
  </div>
  <div class="form-group">
    <input type="submit" name="upload" value="JOIN NOW" class="btn btn-style-1 btn-lg">
  </div>
</form>
<?php if (isset($msg)) {
  echo $msg;
} ?>