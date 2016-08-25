<?php 
include 'include/header.php';
include 'include/sidebar.php';
include '../lib/Database.php';
$db = new Database();
 ?>
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Blank Page</h1>
                </div>
                <!--End Page Header -->
            </div>
<?php 
	if (isset($_POST['submit'])) {
		$id = $_GET['id'];
		$deposite = $_POST['deposite'];
		$deposite_date = $_POST['deposite_date'];
		$query2 = "UPDATE tbl_members SET deposite = $deposite, deposite_date = '$deposite_date' WHERE id = $id";
		$result = $db->update($query2);
		if ($result) {
			print "<script language='Javascript'>document.location.href='account.php?edited_id=$id' ;</script>";
		}
	}


 ?>
<?php 
	$id = $_GET['id'];
	$query = "SELECT * FROM tbl_members WHERE id = $id";
	$result = $db->select($query);
	while($row = mysqli_fetch_assoc($result)){
?>

		<div class="col-md-12">
			<form class="form-horizontal" method="post">
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
				    <div class="col-sm-10">
				      <h5><?php echo $row['name'] ?></h5>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Deposite</label>
				    <div class="col-sm-10">
				      <input type="text" name="deposite" value="<?php echo $row['deposite'] ?>" class="form-control" placeholder="deposite value">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Date of last Deposite</label>
				    <div class="col-sm-10">
				      <input type="text" name="deposite_date" value="<?php echo $row['deposite_date'] ?>" class="form-control" id="inputEmail3" placeholder="Date of last Deposite">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" name="submit" class="btn btn-default">update</button>
				    </div>
				  </div>
				</form>
				<?php
	}
 ?>

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

</body>

</html>
