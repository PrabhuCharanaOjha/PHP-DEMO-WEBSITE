<?php
  error_reporting(0);

    if (isset($_POST['upload'])) {

    #valid first name
    $F_Name = trim($_POST["Name"]);
    if(empty($F_Name)){
    $cnameerr = '<div class="alert alert-danger mt-3" roll=""alert>Please enter a first name.</div>';
    }else{
    $Name = $F_Name;
    }

    #valid email
    $validEmail="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
    $u_Email=trim($_POST["Email"]);
    if(empty($u_Email))
    {
      $cemailerr='div class="alert alert-danger mt-3" roll=""alert>Email is Required</div>'; 
    }
    elseif (!preg_match($validEmail,$u_Email)) {
      $cemailerr='<div class="alert alert-danger mt-3" roll=""alert>Invalid Email Address</div>';
    }
    else{
        $Email= $u_Email;
    }
    
    #valid mobile
    $number = trim($_POST["Number"]);
    if(empty($number)){
    $moberr = '<div class="alert alert-danger mt-3" roll=""alert>Please enter Mobile no</div>';
    }elseif(!is_numeric($number)){
      $moberr = '<div class="alert alert-danger mt-3" roll=""alert>Please enter valid Mobile number</div>';
    }elseif(strlen($number) < 10){
      $moberr = '<div class="alert alert-danger mt-3" roll=""alert>Please enter valid Mobile number</div>';
    }
    else{
    $Number = $number;
    }
    

    if(empty($nameerr) && empty($msgerr))
    {
      if(!$_FILES["uploadfile"]["name"]=="")
      {
        $Name = $_REQUEST['Name'];
        $Email = $_REQUEST['Email'];    
        $Number = $_REQUEST['Number'];    
        $filename = $_FILES["uploadfile"]["name"]; 
        $tempname = $_FILES["uploadfile"]["tmp_name"];     
        $folder = "admin/image/".$filename; 
              
        $sqlimg = "INSERT INTO  (name,email,number,image) VALUES ('$Name','$Email','$Number','$filename')"; 

        if($conn->query($sqlimg))
        {
          if (move_uploaded_file($tempname, $folder))  { 
            $msg='<div class="alert alert-success mt-3" roll=""alert>Request Upadate Successfully</div>';
          }else{
            echo "image upload failed";
            $msg='<div class="alert alert-danger mt-3" roll="alert">Update faild</div>';; 
          }
        }
      }
      else
      {
        $msg= '<div class="alert alert-warning" roll="alert">plz fill image fields</div>';
      }
    }else {
      $msg= '<div class="alert alert-warning" roll="alert">plz fill all fields</div>';      
    }
  }
?>
<!-- Modal -->
<div class="modal fade" id="joinmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Join As A Volunteers</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" class="jumbotron text-white mt-3" method="POST" enctype="multipart/form-data">
          <div class="form-group">
              <!-- <label for="name">Name</label> -->
              <input type="text" name="Name" placeholder="Enter Your Name" class="form-control">
          </div>
          <div class="form-group">
            <!-- <label for="name">E-mail</label> -->
            <input type="text" name="Email" placeholder="Enter Your Email" class="form-control" id="">
          </div>
          <div class="form-group">
              <!-- <label for="name">Mobile Number</label> -->
              <input type="number" name="Number" placeholder="Enter Mobile Number" class="form-control" id="">
          </div>
          <div class="form-group">
              <label for="mobile" class="text-dark">Image</label>
              <input type="file" name="uploadfile"  class="form-control">
          </div>
          
        <?php if(isset($msg)){echo $msg;} ?>
      </div>
      <div class="modal-footer">
        <input type="Submit" name="upload" value="Upload" class="btn btn-success my-3 float-right">
        <input type="reset" value="Reset" class="btn btn-danger ml-3 my-3 float-right">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>