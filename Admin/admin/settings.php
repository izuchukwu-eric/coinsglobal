<?php
include('includes/security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="card shadow mb-4 ml-4 mr-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Admin Settings
            
    </h6>
  </div>

  <div class="container-fluid">

    <div>
    

<div class="card-body">

              <?php
                if(isset($_SESSION['success']) && $_SESSION['success'] !='')
                {
                  echo '<h5 style="color: blue" > '.$_SESSION['success'].' </h5>';
                  unset($_SESSION['success']);
                }

                if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                {
                  echo '<h5 style="color: red"> '.$_SESSION['status'].' </h5>';
                  unset($_SESSION['status']);
                }
            
               ?>

                

<form action="code.php" method="POST">

    <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $_SESSION['id']?>">
        <label> Username </label>
        <input type="text" name="username" class="form-control" value="<?php echo $_SESSION['username']?>">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" value="<?php echo $_SESSION['password_user']?>">
    </div>
         <a href="index.php"> <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> </a>
          <button type="submit" name="updatebtn" class="btn btn-primary my-3">Update</button>
   </div>
        
     </form>



    </div>
  </div>
</div>

</div>




























<?php
include('includes/scripts.php');
include('includes/footer.php');
?>