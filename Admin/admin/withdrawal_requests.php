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
    
    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 mx-3 my-md-0 mw-100 navbar-search" method="post" action="withdrawal_requests.php">
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
    <h6 class="m-0 font-weight-bold text-primary">Withdrawal Requests 
            
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
            $query = "SELECT * FROM withdrawal_request WHERE CONCAT(`id`, `username`, `email`) LIKE '%".$valueToSearch."%' ";
            $query_run = filterTable($query);
          }
          else{
            $query = "SELECT * FROM withdrawal_request ORDER BY id DESC";
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
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Method</th>
            <th>Wallet Address</th>
            <th>Amount</th>
            <th>Date</th>
            <th>ACCEPT</th>
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
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['username']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['coin']?></td>
            <td><?php echo $row['wallet']?></td>
            <td>$<?php echo $row['amount']?></td>
            <td><?php echo $row['createdate']?></td>
            <td>
                <form action="code.php" method="post">
                    <input type="hidden" name="accept_id" value="<?php echo $row['id']?>">
                    <input type="hidden" name="accept_username" value="<?php echo $row['username']?>">
                    <input type="hidden" name="accept_email" value="<?php echo $row['email']?>">
                    <input type="hidden" name="accept_coin" value="<?php echo $row['coin']?>">
                    <input type="hidden" name="accept_wallet" value="<?php echo $row['wallet']?>">
                    <input type="hidden" name="accept_amount" value="<?php echo $row['amount']?>">
                    <button type="submit" name="accept_btn" class="btn btn-success">
                    <?php
                      $verified = 1;
                      if($row['verified'] == $verified){
                        echo "Accepted";
                      }else{
                        echo "ACCEPT";
                      }
                    ?>
                    
                    
                    </button>
                </form>
            </td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="withdraw_id" value="<?php echo $row['id']?>">
                  <button type="submit" name="btn_delete" class="btn btn-danger"> DELETE</button>
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