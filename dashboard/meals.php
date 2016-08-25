<?php include '../lib/Database.php'; 
$db = new Database();
?>


<?php Include 'include/header.php'; ?>
<?php Include 'include/sidebar.php'; ?>

        <!--  page-wrapper -->
        <div id="page-wrapper">

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                   

                                    <thead>
                                        <tr>
                                            <th>Day/Names</th>
                                            <th>Mamun</th>
                                            <th>Zahid</th>
                                            <th>Mahfuz</th>
                                            <th>Faruq</th>
                                            <th>Ashraf</th>
                                            <th>Eianur</th>
                                            <th>Monjur</th>
                                            <th>Shahrukh</th>
                                            <th>Tutul</th>
                                            <th>Nafe</th>
                                            <th>Nafe</th>
                                            <th>Nafe</th>
                                            <th>Nafe</th>
                                            <th>Nafe</th>
                                            <th>Nafe</th>
                                            <th>Per Day Meals</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php 

                                    $query1 = "SELECT * , (name1+name2+name3+name4+name5+name6+name7+name8+name9+name10+name11+name12+name13+name14+name15) as total FROM tbl_meals ORDER BY date ASC";
                                    $result1 = $db->select($query1);
                                        while($row = $result1->fetch_assoc()){
                                        ?>

                                        <tr class="odd gradeX">
                                            <td><?php echo $row['date']; ?></td>
                                            <td><?php echo $row['name1']; ?></td>
                                            <td><?php echo $row['name2']; ?></td>
                                            <td><?php echo $row['name3']; ?></td>
                                            <td><?php echo $row['name4']; ?></td>
                                            <td><?php echo $row['name5']; ?></td>
                                            <td><?php echo $row['name6']; ?></td>
                                            <td><?php echo $row['name7']; ?></td>
                                            <td><?php echo $row['name8']; ?></td>
                                            <td><?php echo $row['name9']; ?></td>
                                            <td><?php echo $row['name10']; ?></td>
                                            <td><?php echo $row['name11']; ?></td>
                                            <td><?php echo $row['name12']; ?></td>
                                            <td><?php echo $row['name13']; ?></td>
                                            <td><?php echo $row['name14']; ?></td>
                                            <td><?php echo $row['name15']; ?></td>
                                            <td><?php echo $row['total']; ?></td>
                                            <td><a href="update_meal.php?id=<?php echo $row['id']; ?>"><input type="button" class="btn btn-primary" name="edit" value="Edit"></input></a></td>
                                        </tr>
                                         <?php
                                        }
                                    ?>
                                    <?php 
                                    $total_meals = 0;
                                    $query2 = "SELECT SUM(name1) as t1, SUM(name2) as t2, SUM(name3) as t3, SUM(name4) as t4, SUM(name5) as t5, SUM(name6) as t6, SUM(name7) as t7, SUM(name8) as t8, SUM(name9) as t9, SUM(name10) as t10, SUM(name11) as t11, SUM(name12) as t12, SUM(name13) as t13, SUM(name14) as t14, SUM(name15) as t15 FROM tbl_meals";
                                    $result2 = $db->select($query2);
                                        while($row = $result2->fetch_assoc()){
                                        $total_meals = $row['t1'] + $row['t2'] + $row['t3'] + $row['t4'] + $row['t5'] + $row['t6'] + $row['t7'] + $row['t8'] + $row['t9'] + $row['t10'] + $row['t11'] + $row['t12'] + $row['t13'] + $row['t14'] + $row['t15'] ;
                                        ?>

                                        <tr class="odd gradeX">
                                            <td>Total Meal</td>
                                            <td><?php echo $row['t1']; ?></td>
                                            <td><?php echo $row['t2']; ?></td>
                                            <td><?php echo $row['t3']; ?></td>
                                            <td><?php echo $row['t4']; ?></td>
                                            <td><?php echo $row['t5']; ?></td>
                                            <td><?php echo $row['t6']; ?></td>
                                            <td><?php echo $row['t7']; ?></td>
                                            <td><?php echo $row['t8']; ?></td>
                                            <td><?php echo $row['t9']; ?></td>
                                            <td><?php echo $row['t10']; ?></td>
                                            <td><?php echo $row['t11']; ?></td>
                                            <td><?php echo $row['t12']; ?></td>
                                            <td><?php echo $row['t13']; ?></td>
                                            <td><?php echo $row['t14']; ?></td>
                                            <td><?php echo $row['t15']; ?></td>
                                            <td><?php echo $total_meals; ?></td>
                                            <td></td>
                                   <?php } ?>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>Total Meambers Meal</td>
                                            <td><?php echo $total_meals; ?></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <?php 
                                            $query3 = "SELECT SUM(cost) as total FROM tbl_markets";
                                            $result3 = $db->select($query3);
                                            while($row = mysqli_fetch_assoc($result3)){
                                                $meal_rate = $row['total']/$total_meals;
                                          }
                                          ?>
                                        <tr class="odd gradeX">
                                            <td>Your Meal Rate</td>
                                            <td><?php echo substr($meal_rate,0,6); ?></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>

                </div>
            </div>
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
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

</body>

</html>
