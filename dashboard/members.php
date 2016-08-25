<?php include 'include/header.php'; ?>
<?php include 'include/sidebar.php'; ?>
<?php include '../lib/Database.php';
$db = new Database();
 ?>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Blank Page</h1>
                </div>
                <!--End Page Header -->
            </div>


        <table class="table table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Balance</th>
              <th>Meals</th>
            </tr>
          </thead>
          <tbody>
<?php 
$query = "SELECT * FROM tbl_members ORDER BY db_name ASC";
$result = $db->select($query);
while ($row = mysqli_fetch_assoc($result)) { ?>

                <tr>
                  <th scope="row">Member <?php echo $row['id'];?></th>
                  <td><?php echo $row['name'];?></td>
                  <td><?php echo $row['phone'];?></td>
                  <td><?php echo $row['balance'];?></td>
                  <td><?php echo $row['meals'];?></td>
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
