<?php include 'include/header.php'; ?> 
<?php include 'include/sidebar.php'; ?> 
<?php include '../lib/Database.php'; 
$db = new Database();
?> 

<?php 

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $cost = $_POST['cost'];

    $query4 = "UPDATE tbl_markets SET name = '$name' , date = '$date', cost = '$cost' Where id = $id";
    $result4 = $db->update($query4);
    if ($result4) {
        print "<script language='Javascript'>document.location.href='market.php' ;</script>";
       // echo '<meta http-equiv="refresh" content="0">';
    }
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $cost = $_POST['cost'];

    $query = "INSERT into tbl_markets(name, date, cost) VALUES ('$name','$date','$cost')";
    $result = $db->insert($query);
    if ($result) {
        echo '<meta http-equiv="refresh" content="0">';
    }

}

 ?>

        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">View Market</h1>

                </div>
                <!--End Page Header -->
            </div>

        <form class="form-inline" method="post">
          <div class="form-group">
            <label for="exampleInputName2">Name</label>
            <input type="text" name="name" value="" class="form-control" id="exampleInputName2" placeholder="Marketter Name">
          </div>
         <div class="form-group">
            <label for="exampleInputName2">Date</label>
             <input class="form-control" name="date" value="" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
          </div>
          <div class="form-group">
            <label for="exampleInputName2">Cost</label>
            <input type="text" name="cost" value="" class="form-control" id="exampleInputName2" placeholder="Cost">
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Save</button>
        </form>
        
  <?php 

        if (isset($_GET['id']) && !empty($_GET['id']))
            {
            $id = $_GET['id'];
            $query3 = "SELECT * FROM tbl_markets WHERE id = $id";
            $result3 = $db->select($query3);
            while ($row2 = mysqli_fetch_assoc($result3)) {
                ?>


           <form class="form-inline" method="post">
          <div class="form-group">
            <label for="exampleInputName2">Name</label>
            <input type="text" name="name" value="<?php echo $row2['name']; ?>" class="form-control" id="exampleInputName2" placeholder="Marketter Name">
          </div>
         <div class="form-group">
            <label for="exampleInputName2">Date</label>
             <input class="form-control" name="date" value="<?php echo $row2['date']; ?>" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
          </div>
          <div class="form-group">
            <label for="exampleInputName2">Cost</label>
            <input type="text" name="cost" value="<?php echo $row2['cost']; ?>" class="form-control" id="exampleInputName2" placeholder="Cost">
          </div>
          <button type="submit" name="update" class="btn btn-primary">Update</button>
        </form>
           <?php 
       }
            }

         ?>
        <br>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Date</th>
              <th>Cost</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php 
    $query2 =  "SELECT *  FROM tbl_markets ORDER BY id ASC";
    $result = $db->select($query2);
    while ($row = mysqli_fetch_assoc($result)) {
      ?>
            <tr>
              <th scope="row"><?php echo $row['id'] ?></th>
              <th scope="row"><?php echo $row['name'] ?></th>
              <td><?php echo $row['date'] ?></td>
              <td><?php echo $row['cost'] ?></td>
              <td><a href="market.php?id=<?php echo $row['id']; ?>" ><button type="button" name="edit" class="btn btn-primary">Edit</button></a></td>
            </tr>   

               <?php 
    }
 ?>
  <?php 
    $query6 =  "SELECT SUM(cost) as total FROM tbl_markets";
    $total = $db->select($query6);
     while ($totals = mysqli_fetch_assoc($total)) {
      ?>

             <tr>
               <th></th>
               <th></th>
               <td></td>
               <td> Total Cost : <?php echo $totals['total']; ?></td>
             </tr>
             <?php 
                }
              ?>
          </tbody>
        </table>












        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->
    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
  
</body>

</html>
