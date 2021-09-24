<?php
include('includes/security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 


?>
  <style>
      .search{
        margin: 0 auto;
        margin-bottom: 1rem;
      }
  </style>
    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 mx-3 my-md-0 mw-100 navbar-search" method="post" action="manage_users.php">
        <div class="input-group search">
          <input type="text" class="bg-light border-0 small" name="value" placeholder="Search by username..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit" name="search">
              <i class="fas fa-search fa-sm">search</i>
            </button>
          </div>
        </div>
    </form>
<div class="container-fluid">
    
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Manage Users
            
    </h6>
  </div>

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

    <div class="table-responsive">

      <?php
          if(isset($_POST['search'])){
            $valueToSearch = $_POST['value'];
            $query = "SELECT * FROM user_signup WHERE CONCAT(`id`,`first_name`, `last_name`, `username`, `email`) LIKE '%".$valueToSearch."%' ";
            $query_run = filterTable($query);
          }
          else{
            $query = "SELECT * FROM user_signup ORDER BY id DESC";
            $query_run = filterTable($query);   

          }
          function filterTable($query){
            $connect = mysqli_connect("localhost","root","","coins_db");
            $filter_Result = mysqli_query($connect, $query);
            return $filter_Result;
          }
      ?>

      <table class="table table-borderless table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Firstname </th>
            <th> Lastname </th>
            <th> Username </th>
            <th>Email </th>
            <th>Country </th>
            <th>Password</th>
            <th>Upline</th>
            <th>Registration Date </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>

          <?php
              if(mysqli_num_rows($query_run) > 0 )
              {
                while($row = mysqli_fetch_assoc($query_run))
                {
          ?>  
          <tr>
            <td><?php echo $row['id'];?> </td>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['country'];?></td>
            <td><?php echo $row['password_user'];?></td>
                    
            <td>
              <?php
            if($row['upline']) 
            { 
             echo $row['upline'];
              
            }

            ?>
            </td>

            <td><?php echo $row['createdate'];?></td>

            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
            <?php
                }
              }        
              else {
                  echo "No Record Found";
                }               
          ?>
            
          </tr>
        
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>