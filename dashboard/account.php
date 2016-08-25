<?php include 'include/header.php'; ?>
<?php include 'include/sidebar.php'; ?>
<?php include '../lib/Database.php';
$db = new Database();
 ?>
  <?php 
        $total_meals = 0;
        $query2 = "SELECT SUM(name1) as t1, SUM(name2) as t2, SUM(name3) as t3, SUM(name4) as t4, SUM(name5) as t5, SUM(name6) as t6, SUM(name7) as t7, SUM(name8) as t8, SUM(name9) as t9, SUM(name10) as t10, SUM(name11) as t11, SUM(name12) as t12, SUM(name13) as t13, SUM(name14) as t14, SUM(name15) as t15 FROM tbl_meals";
        $result2 = $db->select($query2);
            while($row = $result2->fetch_assoc()){
            $total_meals = $row['t1'] + $row['t2'] + $row['t3'] + $row['t4'] + $row['t5'] + $row['t6'] + $row['t7'] + $row['t8'] + $row['t9'] + $row['t10'] + $row['t11'] + $row['t12'] + $row['t13'] + $row['t14'] + $row['t15'] ;
            }?>
    <?php
    $query3 = "SELECT SUM(cost) as total FROM tbl_markets";
    $result3 = $db->select($query3);
    while($row = mysqli_fetch_assoc($result3)){
        $meal_rate = $row['total']/$total_meals;
  }
  ?>
  <?php 
        $update_beal1 = 0;
        $update_beal2 = 0;
        $update_beal3 = 0;
        $update_beal4 = 0;
        $update_beal5 = 0;
        $update_beal6 = 0;
        $update_beal7 = 0;
        $update_beal8 = 0;
        $update_beal9 = 0;
        $update_beal10 = 0;
        $update_beal11 = 0;
        $update_beal12 = 0;
        $update_beal13 = 0;
        $update_beal14 = 0;
        $update_beal15 = 0;
        $query4 = "SELECT SUM(name1) as t1, SUM(name2) as t2, SUM(name3) as t3, SUM(name4) as t4, SUM(name5) as t5, SUM(name6) as t6, SUM(name7) as t7, SUM(name8) as t8, SUM(name9) as t9, SUM(name10) as t10, SUM(name11) as t11, SUM(name12) as t12, SUM(name13) as t13, SUM(name14) as t14, SUM(name15) as t15 FROM tbl_meals";
        $result4 = $db->select($query4);
            while($row = $result4->fetch_assoc()){
            $update_beal[1] = $row['t1']*$meal_rate;
            $update_beal[2] = $row['t2']*$meal_rate; 
            $update_beal[3] = $row['t3']*$meal_rate;
            $update_beal[4] =  $row['t4']*$meal_rate;
            $update_beal[5] =  $row['t5']*$meal_rate;
            $update_beal[6] =  $row['t6']*$meal_rate;
           $update_beal[7]=   $row['t7']*$meal_rate;
           $update_beal[8] =   $row['t8']*$meal_rate;
           $update_beal[9] =   $row['t9']*$meal_rate;
           $update_beal[10] =   $row['t10']*$meal_rate;
           $update_beal[11] =   $row['t11']*$meal_rate;
           $update_beal[12] =   $row['t12']*$meal_rate;
           $update_beal[13] =   $row['t13']*$meal_rate;
           $update_beal[14] =   $row['t14']*$meal_rate;
           $update_beal[15] =   $row['t15']*$meal_rate;
           }

            ?>

        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Account Section</h1>
                </div>
                <!--End Page Header -->
            </div>


        <table class="table table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Deposite</th>
              <th>Date of Last Deposite</th>
              <th>Beal of Meals</th>
              <th>Current Balance Status</th>
              <th>Meals</th>
            </tr>
          </thead>
          <tbody>
<?php 
$query = "SELECT * FROM tbl_members ORDER BY id ASC";
$result = $db->select($query);
while ($row = mysqli_fetch_assoc($result)) {
$id = $row['id'];
$query2 = "UPDATE tbl_members SET beal = $update_beal[$id] WHERE id = $id";
$result5 = $db->update($query2);
 ?>

                <tr>
                  <th scope="row">Member <?php echo $row['id'];?></th>
                  <td><?php echo $row['name'];?></td>
                  <td><?php echo $row['deposite'];?></td>
                  <td><?php echo $row['deposite_date'];?></td>
                  <td><?php echo $row['beal'];?></td>
                  <td><?php echo $row['balance'];?></td>
                  <td><?php echo $row['meals'];?></td>
                  <td><a href="update_account.php?id=<?php echo $row['id'];?>"><button class="btn btn-primary">Edit</button></a></td>
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
