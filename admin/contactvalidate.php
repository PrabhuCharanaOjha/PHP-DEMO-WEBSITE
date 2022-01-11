<?php
include('dbconnection.php');
//error_reporting(0);
?>
<?php
  if(isset($_REQUEST['Msg_submit']))
  {

    #valid first name
    $F_Name = trim($_POST["Name"]);
    if(empty($F_Name)){
    $cnameerr = '<div class="alert alert-danger mt-3" roll=""alert>Please enter a first name.</div>';
    } elseif(!filter_var($F_Name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
    $cnameerr = '<div class="alert alert-danger mt-3" roll=""alert>Please enter a valid name.</div>';
    } else{
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
    $u_Number = trim($_POST["Number"]);
    if(empty($u_Number)){
    $cmoberr = '<div class="alert alert-danger mt-3" roll=""alert>Please enter Mobile no</div>';
    }elseif(!is_numeric($u_Number)){
      $cmoberr = '<div class="alert alert-danger mt-3" roll=""alert>Please enter valid Mobile number</div>';
    }
    else{
    $Number = $u_Number;
    }
        
    #valid message
    $c_messages= trim($_POST["Message"]);
    if(empty($c_messages)){
    $cmsgerr = '<div class="alert alert-danger mt-3" roll=""alert>Please enter Message</div>';
    }  
    else{
    $Message = $c_messages;
    }
    
    #inserting data
    if(empty($cnameerr) && empty($cmoberr) && empty($cemailerr) &&  empty($cmsgerr))
    {
      $Name=$_REQUEST['Name'];
      $Email=$_REQUEST['Email'];
      $Mobile=$_REQUEST['Number'];
      $Message=$_REQUEST['Message'];
      
      $sql="INSERT INTO contact(name,email,mobile,messages) VALUES('$Name','$Email','$Number','$Message')";
      if($conn->query($sql))
      {
        $msg='<div class="alert alert-success mt-3" roll=""alert>Request Upadate Successfully</div>';
      }
      else
      {
        $msg='<div class="alert alert-danger mt-3" roll="alert">Update faild</div>'; 
      } 
    }
  }
?>