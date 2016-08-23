    
    <?php include 'include/header.php' ?>
    <?php include 'include/sidebar.php' ?>
    <?php include '../lib/Database.php'; 
        $db = new Database();
    ?>

                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Update Meals</h1>
                </div>
                <!--End Page Header -->
            </div>

        
            <?php 
                if(isset($_POST['submit'])){
                    $id = $_GET['id'];

                    $name1= $_POST['name1'];
                    $name2= $_POST['name2'];
                    $name3= $_POST['name3'];
                    $name4= $_POST['name4'];
                    $name5= $_POST['name5'];
                    $name6= $_POST['name6'];
                    $name7= $_POST['name7'];
                    $name8= $_POST['name8'];
                    $name9= $_POST['name9'];
                    $name10= $_POST['name10'];
                    $name11= $_POST['name11'];
                    $name12= $_POST['name12'];
                    $name13= $_POST['name13'];
                    $name14= $_POST['name14'];
                    $name15= $_POST['name15'];
              
                $query = "UPDATE tbl_meals SET name1 = $name1, name2 = $name2, name3 = $name3, name4 = $name4, name5 = $name5, name6 = $name6, name7 = $name7, name8 = $name8, name9 = $name9, name10 = $name10, name11 = $name11, name12 = $name12, name13 = $name13, name14 = $name14, name15 = $name15 where id = $id";

                $result = $db->update($query);
                }
            ?>


            <form class="form-horizontal" method="post">
            <?php
                $id = $_GET['id'];
                $query = "SELECT * FROM tbl_meals where id = '$id'";
                $result = $db->select($query);
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
            <h1>Update Meal Entry for Date  : <?php echo $row['date'] ?> </h1><br>
              <div class="form-group">
                <label class="col-sm-2">Mamun</label>
                <div class="col-sm-4">
                  <input type="text" name="name1" class="form-control" value="<?php echo $row['name1'] ?>">
                </div>
              </div>
                <div class="form-group">
                <label class="col-sm-2">Zahid</label>
                <div class="col-sm-4">
                  <input type="text" name="name2" class="form-control" value="<?php echo $row['name2'] ?>">
                </div>
              </div>
               <div class="form-group">
                <label class="col-sm-2">Mahfuz</label>
                <div class="col-sm-4">
                  <input type="text" name="name3" class="form-control" value="<?php echo $row['name3'] ?>">
                </div>
              </div>
               <div class="form-group">
                <label class="col-sm-2">Faruq</label>
                <div class="col-sm-4">
                  <input type="text" name="name4" class="form-control" value="<?php echo $row['name4'] ?>">
                </div>
              </div>
               <div class="form-group">
                <label class="col-sm-2">Ashraf</label>
                <div class="col-sm-4">
                  <input type="text" name="name5" class="form-control" value="<?php echo $row['name5'] ?>">
                </div>
              </div>
               <div class="form-group">
                <label class="col-sm-2">Eianur</label>
                <div class="col-sm-4">
                  <input type="text" name="name6" class="form-control" value="<?php echo $row['name6'] ?>">
                </div>
              </div>
               <div class="form-group">
                <label class="col-sm-2">Monjur</label>
                <div class="col-sm-4">
                  <input type="text" name="name7" class="form-control" value="<?php echo $row['name7'] ?>">
                </div>
              </div>
               <div class="form-group">
                <label class="col-sm-2">Shahrukh</label>
                <div class="col-sm-4">
                  <input type="text" name="name8" class="form-control" value="<?php echo $row['name8'] ?>">
                </div>
              </div>
               <div class="form-group">
                <label class="col-sm-2">Tutul</label>
                <div class="col-sm-4">
                  <input type="text" name="name9" class="form-control" value="<?php echo $row['name9'] ?>">
                </div>
              </div>
               <div class="form-group">
                <label class="col-sm-2">Nafee</label>
                <div class="col-sm-4">
                  <input type="text" name="name10" class="form-control" value="<?php echo $row['name10'] ?>">
                </div>
              </div>
               <div class="form-group">
                <label class="col-sm-2">Name11</label>
                <div class="col-sm-4">
                  <input type="text" name="name11" class="form-control" value="<?php echo $row['name11'] ?>">
                </div>
              </div>
               <div class="form-group">
                <label class="col-sm-2">Name12</label>
                <div class="col-sm-4">
                  <input type="text" name="name12" class="form-control" value="<?php echo $row['name12'] ?>">
                </div>
              </div>
               <div class="form-group">
                <label class="col-sm-2">Name13</label>
                <div class="col-sm-4">
                  <input type="text" name="name13" class="form-control" value="<?php echo $row['name13'] ?>">
                </div>
              </div>
               <div class="form-group">
                <label class="col-sm-2">Name14</label>
                <div class="col-sm-4">
                  <input type="text" name="name14" class="form-control" value="<?php echo $row['name14'] ?>">
                </div>
              </div>
               <div class="form-group">
                <label class="col-sm-2">Name15</label>
                <div class="col-sm-4">
                  <input type="text" name="name15" class="form-control" value="<?php echo $row['name15'] ?>">
                </div>
              </div>


                <?php
                }
             ?>
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              <button type="clear" class="btn btn-primary">Clear</button>
              <input type="button" class="btn btn-primary"> <a href="meals.php">View Meals</a>
            </form>








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
