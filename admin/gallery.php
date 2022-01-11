<?php
define('TITLE','Add Gallery');
define('PAGE','gallery');
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


  if (isset($_POST['upload'])) {

    if(($_FILES["uploadfile"]["name"]==""))
    {
        $msg= '<div class="alert alert-warning" roll="alert">plz fill all fields</div>';
    }
    else {
      $filename = $_FILES["uploadfile"]["name"]; 
      $tempname = $_FILES["uploadfile"]["tmp_name"];     
      $folder = "image/gallery/".$filename; 
            
      $sqlimg = "INSERT INTO gallery (image) VALUES ('$filename')"; 

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


?>    
<!--START CONTAINER-->
<div class="col-sm-12">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <div class=" mx-5 my-3 text-center">
            <form action="" class="jumbotron shadow text-dark border mt-3" method="POST" enctype="multipart/form-data">
              <h3 class="text-center mb-3">ADD IMAGES</h3>
              <div class="form-group">
                  <label for="mobile">Image</label>
                  <input type="file" name="uploadfile"  class="form-control">
              </div>
              <input type="reset" value="Reset" class="btn btn-danger ml-3 my-3 float-right">
              <input type="Submit" name="upload" value="Submit" class="btn btn-success my-3 float-right">
            </form>
            <?php if(isset($msg)){echo $msg;} ?>
            
          </div>
        </div>
        <div class="col-sm-6">
<!-- **************************** start table section ******************************* -->

          <?php
          $sql="SELECT * FROM gallery";
          $result=$conn->query($sql);
          if($result->num_rows>0)
          {
              echo '<table class="table table-striped">';
                  echo '<thead>';
                      echo '<tr>';
                      echo '<th scope="col">ID</th>';
                      echo '<th scope="col">IMAGES</th>';
                      echo '</tr>';
                  echo '</thead>';
                  while($row=$result->fetch_assoc())
                  {
                  echo '<tbody>';
                      echo '<tr>';
                      echo '<td>'.$row['id'].'</td>';
                      echo '<form action="" method="POST">';
                      echo '<td>';
                      echo '<img src="image/gallery/'.$row['image'].'"width="60" height="60" alt="">';
                      echo '<input type="hidden" name="hId" value="'.$row['id'].'">';
                      echo '<button type="submit" name="Delete" class="btn btn-danger ml-5"><i class="far fa-trash-alt"></i></button>';
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
//******************************** end table section ***********************************//

//******************************** start delete section ***********************************//
          if(isset($_REQUEST['Delete']))
            {
              $hId=$_REQUEST['hId'];
              $sql1="SELECT * FROM gallery WHERE id='$hId'";
              $result=$conn->query($sql1);
              if($row=$result->fetch_assoc())
              {
                unlink("image/gallery/".$row['image']);
                $sql2="DELETE FROM gallery WHERE id='$hId'";
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
//********************************end delete section **************************************//

          ?>
        </div>
      </div>
    </div>
    <!--END REQUESTER REQUEST-->
</div>
<!--END CONTAINER-->
<?php include('includs/footer.php'); ?>
