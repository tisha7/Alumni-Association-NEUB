<?php
    require_once("functions/function.php");
	include("includes/dbconn.php");
    get_header();
    get_sidebar();
    get_bread();
?>
				<div class="box span12">
					<div class="box-header" data-original-title>
					</div>
					<?php
						$query = "SELECT * FROM `user` order by user_id DESC";
						$result=$con->query($query);
							  ?>
								<div class="box-content">
								<form action="userupdate.php" method="POST">
									<table class="table table-striped table-bordered bootstrap-datatable datatable"> 
									  <thead>
										  <tr>
										    <th>No.</th>
											<th>Name</th>
											<th>Username</th>
											<th>Password</th>
											<th>Email</th>
											<th></th>
										  </tr>
									  </thead>
									<?php	
										if($result->num_rows>0){
										$id=1;
										while ($row= $result->fetch_assoc()) {
									?>
									<form action="userupdate.php" method="POST">
									<tr>
										<td name="id[]"><?php echo $id ?></td>
										<td name = "name[]" contenteditable><?php echo $row['user_name'] ?></td>
										<td name = "username[]" type = "text" id = "username" contenteditable><?php echo $row['user_username'] ?></td>
										<td name = "password[]" type = "text" id = "password" contenteditable><?php echo $row['user_password'] ?></td>
										<td name = "email[]" type = "text" id = "email" contenteditable><?php echo $row['user_email'] ?></td>
										<td>
												
										</td>
									</tr>
						  		<?php
								$id++;	
								}
							}
						  ?>
						
					  </table>
					  </form>
					</div>
				</div><!--/span-->
<?php
    get_footer();
?>