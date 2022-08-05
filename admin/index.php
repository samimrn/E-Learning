<?php include('admin-partials/header.php'); ?>



<h1 style='color: Black; margin-top:3rem'><center>Dashboard Summary</center></h1>
			
				<div class="row" style="margin-top:4rem;">
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="card border-light mb-3" style="max-width: 18rem; height:10rem;">
						<?php  

				$sql="Select * FROM tbl_admin";
				// execute the query 
				$res=mysqli_query($conn,$sql);

				$count=mysqli_num_rows($res);

				 ?>
  							<div class="card-header text-center h5 fw-bold">Admin</div>
  							<div class="card-body">
    							<h5 class="card-title text-center fs-2 fw-bolder p-4"><?php echo $count; ?></h5>
  							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="card border-light mb-3" style="max-width: 18rem; height:10rem;">
						<?php  

				$sql="Select * FROM tbl_category";
				// execute the query 
				$res=mysqli_query($conn,$sql);

				$count2=mysqli_num_rows($res);

				 ?>
  							<div class="card-header text-center h5 fw-bold">Categories</div>
  							<div class="card-body">
    							<h5 class="card-title text-center fs-2 fw-bolder p-4"> <?php echo $count2;?></h5>
  							</div> 
						</div>
					</div>

					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="card border-light mb-3" style="max-width: 18rem; height:10rem;">
						<?php  

				$sql="Select * FROM tbl_course";
				// execute the query 
				$res=mysqli_query($conn,$sql);

				$count3=mysqli_num_rows($res);

				 ?>
  							<div class="card-header text-center h5 fw-bold">Courses</div>
  							<div class="card-body">
    							<h5 class="card-title text-center fs-2 fw-bolder p-4"><?php echo $count3; ?></h5>
  							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="card border-light mb-3" style="max-width: 18rem; height:10rem;">
						<?php  

				$sql="Select * FROM tbl_lesson";
				// execute the query 
				$res=mysqli_query($conn,$sql);

				$count4=mysqli_num_rows($res);

				 ?>
  							<div class="card-header text-center h5 fw-bold">Lessons</div>
  							<div class="card-body">
    							<h5 class="card-title text-center fs-2 fw-bolder p-4"><?php echo $count4;  ?></h5>
  							</div>
						</div>
					</div>

					<!-- <div class="col-lg-3 col-md-4 col-sm-6 " style="align-item:center">
						<div class="card border-light mb-3" style="max-width: 18rem; height:10rem;">
						

                                // $sql="Select * FROM tbl_contact";
                                // // execute the query 
                                // $res=mysqli_query($conn,$sql);

                                // $count5=mysqli_num_rows($res);

                                ?>
  							<div class="card-header text-center h5">Number Of Contacts</div>
  							<div class="card-body">
    							<h5 class="card-title text-center"><?php echo $count5;   ?></h5>
  							</div>
						</div>
					</div> -->
                    <div class="container"> 
                        
                    <h1 style='color: Black; margin-top:3rem'><center>Latest Contacts</center></h1>
                        
                    
                <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody>
    <?php  

//qury to get all categiry from db
$sql = "SELECT * FROM tbl_contact ORDER BY id DESC LIMIT 3";

//execute the query
$res =  mysqli_query($conn,$sql);

//count rows
$count = mysqli_num_rows($res);

//create serial number variable and assign value as 1
$sn = 1;

//check whether we have data in db or not
if($count>0)
{
    //we have data in db
    //get the data and display
    while ($row = mysqli_fetch_assoc($res)) 
    {
        $id = $row['id'];
        $fullname = $row['fullname'];
        $email = $row['email'];
        $phone = $row['phone'];
        $message = $row['message'];
    
        ?>
      <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $fullname; ?></td>
        <td><?php echo $email; ?></td>
        <td><?php echo $phone; ?></td>
        <td><?php echo $message; ?></td>
      </tr>
      <?php 

						}
					}
					else
					{
						//we don't have data
						//we will display the message inside table
						?>

						<tr>
							<td colspan="5">No Contact Found.</td>
						</tr>

						<?php  


					}
				?>

    </tbody>
  </table>
</div>
					

                   