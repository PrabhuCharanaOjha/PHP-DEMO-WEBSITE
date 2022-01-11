<?php
define('TITLE','Bank Details');
define('PAGE','bank');
include('../dbconnection.php');
//error_reporting(0);
session_start();
if(isset($_SESSION['is_adminlogin']))
{
    $aemail=$_SESSION['Email'];
}
else
{
    echo '<script>location.href="index.php"</script>';
}

include('includs/header.php');


  if (isset($_POST['upload'])) 
  {
    if(($_REQUEST['name']=="")||($_REQUEST['type']=="")||($_REQUEST['bank']=="")||($_REQUEST['bankaddress']=="")||($_REQUEST['accountnumber']=="")||($_REQUEST['ifsc']==""))
    {
        $msg= '<div class="alert alert-warning" roll="alert">plz fill all fields</div>';
    }
    else 
    {
      $name = $_REQUEST['name'];    
      $type = $_REQUEST['type'];    
      $bank = $_REQUEST['bank'];    
      $bankaddress = $_REQUEST['bankaddress'];    
      $accountnumber = $_REQUEST['accountnumber'];    
      $ifsc = $_REQUEST['ifsc'];    
      $micr = $_REQUEST['micr'];    
            
      $sql = "INSERT INTO bankdetails(name,type,bank,bankaddress,accountnumber,ifsc,micr) VALUES ('$name','$type','$bank','$bankaddress','$accountnumber','$ifsc','$micr')"; 

      if($conn->query($sql))
      {
        $msg='<div class="alert alert-success mt-3" roll=""alert>Request Upadate Successfully</div>';
      }
      else
      {
        $msg= '<div class="alert alert-warning" roll="alert">failed to upload</div>';
      }
    }
  } 
?>    
<!--START CONTAINER-->
<div class="col-sm-12">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <div class=" mx-5 my-3 text-center">
            <form action="" class="jumbotron shadow text-dark border mt-3" method="POST" enctype="multipart/form-data">
              <h3 class="text-center mb-3">ADD BANK DETAILS</h3>
              <div class="form-group">
                  <label for="Heading">Account Holder Name:</label>
                  <input type="text" name="name" class="form-control">
              </div>
              <div class="form-group">
                  <label for="Description">Account Type:</label>
                  <input type="text" name="type" class="form-control">
              </div>
              <div class="form-group">
                  <label for="Image">Bank Name:</label>
                  <input type="text" name="bank"  class="form-control">
              </div>
              <div class="form-group">
                  <label for="Heading">Bank Address:</label>
                  <input type="text" name="bankaddress" class="form-control">
              </div>
              <div class="form-group">
                  <label for="Description">Account Number:</label>
                  <input type="text" name="accountnumber" class="form-control">
              </div>
              <div class="form-group">
                  <label for="Image">IFSC Code:</label>
                  <input type="text" name="ifsc"  class="form-control">
              </div>
              <div class="form-group">
                  <label for="Image">MICR Code:</label>
                  <input type="text" name="micr"  class="form-control">
              </div>
              <input type="reset" value="Reset" class="btn btn-danger ml-3 my-3 float-right">
              <input type="Submit" name="upload" value="Submit" class="btn btn-success my-3 float-right">
            </form>
            <?php if(isset($msg)){echo $msg;} ?>
            
          </div>
        </div>
        <div class="col-sm-6">
          <?php
          $sql="SELECT * FROM bankdetails";
          $result=$conn->query($sql);
          if($result->num_rows>0)
          {
              echo '<table class="table table-striped">';
                  echo '<thead>';
                      echo '<tr>';
                      echo '<th scope="col">Account Holder Name</th>';
                      echo '<th scope="col">Account Type</th>';
                      echo '<th scope="col">Bank Name</th>';
                      echo '<th scope="col">Bank Address</th>';
                      echo '<th scope="col">Account Number</th>';
                      echo '<th scope="col">IFSC Code</th>';
                      echo '<th scope="col">MICR Code</th>';
                      echo '</tr>';
                  echo '</thead>';
                  while($row=$result->fetch_assoc())
                  {
                  echo '<tbody>';
                      echo '<tr>';
                      echo '<td>'.$row['name'].'</td>';
                      echo '<td>'.$row['type'].'</td>';
                      echo '<td>'.$row['bank'].'</td>';
                      echo '<td>'.$row['bankaddress'].'</td>';
                      echo '<td>'.$row['accountnumber'].'</td>';
                      echo '<td>'.$row['ifsc'].'</td>';
                      echo '<td>'.$row['micr'].'</td>';
                      echo '<form action="" method="POST">';
                      echo '<td>';
                      echo '<input type="hidden" name="hId" value="'.$row['id'].'">';
                      echo '<button type="submit" name="Delete" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>';
                      echo '</td>';
                      echo '</form>';
                      echo '</tr>';
                  echo '</tbody>';
                  }
              echo '</table>';
          }
          else
          {
              echo "0 result";
          }

          if(isset($_REQUEST['Delete']))
            {
              $hId=$_REQUEST['hId'];
              $sql="DELETE FROM bankdetails WHERE id='$hId'";
              if($conn->query($sql))
              {
                  echo 'done';
              }
              else{
                  echo "failed";
              }
  
                echo '<meta http-equiv="refresh" content="0;url=?closed"/>';
            }


          ?>
        </div>
      </div>
    </div>
    <!--END REQUESTER REQUEST-->
</div>
<!--END CONTAINER-->
<?php include('includs/footer.php'); ?>
