<?php
define('TITLE','Team');
define('PAGE','team');
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
  // upload new data**********************************************

  if (isset($_POST['upload'])) {
    if(($_REQUEST['Name']=="")||($_REQUEST['Designation']=="")||($_REQUEST['Message']=="")||($_FILES["uploadfile"]["name"]==""))
    {
      $msg= '<div class="alert alert-warning" roll="alert">plz fill all fields</div>';
    }
    else 
    {
      $Name = $_REQUEST['Name'];
      $Designation = $_REQUEST['Designation'];
      $Message = $_REQUEST['Message'];    
      $filename = $_FILES["uploadfile"]["name"]; 
      $tempname = $_FILES["uploadfile"]["tmp_name"];     
      $folder = "image/team/".$filename; 
            
      $sqlimg = "INSERT INTO team (name,designation,message,image) VALUES ('$Name','$Designation','$Message','$filename')"; 

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
  }
  // edit button***************************************
  if(isset($_REQUEST['Edit']))
  {
      $hId=$_REQUEST['hId'];
      $sql="SELECT * FROM team WHERE id='$hId'";
      $result=$conn->query($sql);
      if($result->num_rows==1)
      {
          $row=$result->fetch_assoc();
      }
  }
  // update exist data**********************************
  if(isset($_REQUEST['update']))
  {    
    if(($_REQUEST['Name']=="")||($_REQUEST['Designation']=="")||($_REQUEST['Message']=="")||($_FILES["uploadfile"]["name"]==""))
    {
      $msg= '<div class="alert alert-warning" roll="alert">plz fill all fields</div>';
    }
    else 
    {
      $hId = $_REQUEST['hId'];
      $Name = $_REQUEST['Name'];
      $Designation = $_REQUEST['Designation'];
      $Message = $_REQUEST['Message'];    
      $filename = $_FILES["uploadfile"]["name"]; 
      $tempname = $_FILES["uploadfile"]["tmp_name"];     
      $folder = "image/team/".$filename; 

      $sql="UPDATE team SET name='$Name',designation='$Designation',message='$Message' ,image='$filename' WHERE id='$hId'";

      if($result=$conn->query($sql))
      {
        if (move_uploaded_file($tempname, $folder))  
        { 
          $msg='<div class="alert alert-success mt-3" roll=""alert>Request Upadate Successfully</div>';
        }
        else
        {
          $msg='<div class="alert alert-danger mt-3" roll="alert">Update faild</div>';; 
        } 
      }
      else
      {
        echo"query problem";
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
              <h3 class="text-center mb-3">ADD PROFILE</h3>
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="Name" class="form-control"  value="<?php if(isset($row['name'])){echo $row['name'];}?>">
              </div>
              <div class="form-group">
                  <label for="name">Designation</label>
                  <input type="text" name="Designation" class="form-control"  value="<?php if(isset($row['designation'])){echo $row['designation'];}?>">
              </div>
              <div class="form-group">
                  <label for="name">Message</label>
                  <textarea name="Message" placeholder="Message" class="form-control" required=""  value="<?php if(isset($row['message'])){echo $row['message'];}?>"></textarea>
              </div>
              <div class="form-group">
                  <label for="mobile">Image</label>
                  <input type="file" name="uploadfile"  class="form-control" value="<?php if(isset($row['image'])){echo $row['image'];}?>">
              </div>
              <input type="reset" value="Reset" class="btn btn-danger ml-3 my-3 float-right">
              <?php
                if(isset($_REQUEST['Edit']))
                {
                  echo '<input type="hidden" name="hId" value='.$row["id"].'><button type="submit" name="update" class="btn btn-primary float-right my-3">UPDATE</button>';
                }
                else
                {
                  echo'<input type="Submit" name="upload" value="Upload" class="btn btn-success my-3 float-right">';
                }
              ?>
            </form>
            <?php if(isset($msg)){echo $msg;} ?>
            
          </div>
        </div>
        <div class="col-sm-6">
          <?php
          $sql="SELECT * FROM team";
          $result=$conn->query($sql);
          if($result->num_rows>0)
          {
              echo '<table class="table table-striped">';
                  echo '<thead>';
                      echo '<tr>';
                      echo '<th scope="col">ID</th>';
                      echo '<th scope="col">NAME</th>';
                      echo '<th scope="col">DESIGNATION</th>';
                      echo '<th scope="col">MESSAGE</th>';
                      echo '<th scope="col">IMAGES</th>';
                      echo '<th scope="col">ACTION</th>';
                      echo '</tr>';
                  echo '</thead>';
                  while($row=$result->fetch_assoc())
                  {
                  echo '<tbody>';
                      echo '<tr>';
                      echo '<td>'.$row['id'].'</td>';
                      echo '<td>'.$row['name'].'</td>';
                      echo '<td>'.$row['designation'].'</td>';
                      echo '<td>'.$row['message'].'</td>';
                      echo '<td><img src="image/team/'.$row['image'].'"width="60" height="60" alt="">'.'</td>';
                      echo '<form action="" method="POST">';
                      echo '<td>';
                      echo '<input type="hidden" name="hId" value="'.$row['id'].'">';
                      echo '<button type="submit" name="Edit" class="btn btn-info mr-1"><i class="fas fa-pen"></i></button>';
                      echo '<button type="submit" name="Delete" class="btn btn-danger ml-1"><i class="far fa-trash-alt"></i></button>';
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
              $sql1="SELECT * FROM team WHERE id='$hId'";
              $result=$conn->query($sql1);
              if($row1=$result->fetch_assoc())
              {
                unlink("image/team/".$row1['image']);
                $sql2="DELETE FROM team WHERE id='$hId'";
                if($conn->query($sql2))
                {
                  echo 'done';
                }
                else{
                  echo "failed to delete";
                }
              }
              else{
                echo "failed delete file from folder";
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
