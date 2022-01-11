<?php
define('TITLE','Vission');
define('PAGE','vission');
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
    if(($_REQUEST['Heading']=="")||($_REQUEST['Description']=="")||($_FILES["uploadfile"]["name"]==""))
    {
        $msg= '<div class="alert alert-warning" roll="alert">plz fill all fields</div>';
    }
    else 
    {
      $Heading = $_REQUEST['Heading'];    
      $Description = $_REQUEST['Description'];    
      $filename = $_FILES["uploadfile"]["name"]; 
      $tempname = $_FILES["uploadfile"]["tmp_name"];     
      $folder = "image/vission/".$filename; 
            
      $sql = "INSERT INTO vission(heading,description,image) VALUES ('$Heading','$Description','$filename')"; 

      if($conn->query($sql))
      {
        if (move_uploaded_file($tempname, $folder))  { 
          $msg='<div class="alert alert-success mt-3" roll=""alert>Request Upadate Successfully</div>';
        }else{
          $msg='<div class="alert alert-danger mt-3" roll="alert">Update faild</div>';; 
        }
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
              <h3 class="text-center mb-3">ADD VISSION</h3>
              <div class="form-group">
                  <label for="Heading">Heading</label>
                  <input type="text" name="Heading" class="form-control">
              </div>
              <div class="form-group">
                  <label for="Description">Description</label>
                  <input type="text" name="Description" class="form-control">
              </div>
              <div class="form-group">
                  <label for="Image">Image</label>
                  <input type="file" name="uploadfile"  class="form-control">
              </div>
              <input type="reset" value="Reset" class="btn btn-danger ml-3 my-3 float-right">
              <input type="Submit" name="upload" value="Submit" class="btn btn-success my-3 float-right">
            </form>
            <?php if(isset($msg)){echo $msg;} ?>
            
          </div>
        </div>
        <div class="col-sm-6">
          <?php
          $sql="SELECT * FROM vission";
          $result=$conn->query($sql);
          if($result->num_rows>0)
          {
              echo '<table class="table table-striped">';
                  echo '<thead>';
                      echo '<tr>';
                      echo '<th scope="col">ID</th>';
                      echo '<th scope="col">HEADING</th>';
                      echo '<th scope="col">DESCRIPTION</th>';
                      echo '<th scope="col">IMAGES</th>';
                      echo '</tr>';
                  echo '</thead>';
                  while($row=$result->fetch_assoc())
                  {
                  echo '<tbody>';
                      echo '<tr>';
                      echo '<td>'.$row['id'].'</td>';
                      echo '<td>'.$row['heading'].'</td>';
                      echo '<td>'.$row['description'].'</td>';
                      echo '<form action="" method="POST">';
                      echo '<td>';
                      echo '<img src="image/vission/'.$row['image'].'"width="60" height="60" alt="">';
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
              $sql1="SELECT * FROM vission WHERE id='$hId'";
              $result=$conn->query($sql1);
              if($row1=$result->fetch_assoc())
              {
                unlink("image/vission/".$row1['image']);
                $sql2="DELETE FROM vission WHERE id='$hId'";
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
