



<?php include('partials/header.php'); ?>



		<!--breadcrumb starts-->
		<div class="breadcrumb-nav">
			<div class="container">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb mb-0">
				    <li class="breadcrumb-item"><a href="<?php echo SITEURL; ?>">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">course</li>
				  </ol>
				</nav>
			</div>
		</div>
		
		<!--breadcrumb ends-->

		<!--course section starts-->
		<section class="course-section section-padding">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8 ">
						<div class="section-title text-center mb-4">
							<h2 class="title">
								Our Courses
							</h2>
							<p class="sub-title">
								Find the right course for you.
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<nav>
						  <div class="nav nav-tabs border-0 justify-content-center mb-4" id="web-development-tab" role="tablist">
						  <?php

    
$sql="SELECT * FROM tbl_category where active='yes'";

$res=mysqli_query($conn,$sql);

$count=mysqli_num_rows($res);

if($count>0)
	{
		$c = 0;
		while($row=mysqli_fetch_assoc($res))
			{
				//print_r($row); die(); // [id] => 1 [category_id] => 1 [image] => Course-Name-3425.jpg [title] => Html For Beginners [instructor] => Salam Khan [active] => Yes )
				$id=$row['id'];
				$name = $row['name'];

?>   
						  <button class="nav-link <?php if($c == 0){ echo 'active'; }?> " id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#<?php echo str_replace(' ','-',$name)?>" type="button" role="tab" aria-controls="<?php echo str_replace(' ','-',$name)?>" aria-selected="true"><?php echo $name; ?></button>
			<?php $c++; }}?>			   
						  </div>
						</nav>
						<div class="tab-content" id="nav-tabContent">
                            <?php 
							$sql="SELECT * FROM tbl_category where active='yes'";

							$res=mysqli_query($conn,$sql);
							if($count>0)
	{
		$cc=0;
		while($row=mysqli_fetch_assoc($res))
			{
				//print_r($row); die(); // [id] => 1 [category_id] => 1 [image] => Course-Name-3425.jpg [title] => Html For Beginners [instructor] => Salam Khan [active] => Yes )
				$id=$row['id'];
				$name = $row['name'];
				 ?>
						  <div class="tab-pane fade show <?php if($cc == 0){ echo 'active'; }?> " id="<?php echo str_replace(' ','-',$name)?>" role="tabpanel" aria-labelledby="web-development-tab">
						  	<div class="row">
							  <?php

    
$sql="SELECT * FROM tbl_course where category_id=".$id;

$res2=mysqli_query($conn,$sql);

$count2=mysqli_num_rows($res2);

if($count2>0)
	{
		while($row2=mysqli_fetch_assoc($res2))
			{
				//print_r($row); die(); // [id] => 1 [category_id] => 1 [image] => Course-Name-3425.jpg [title] => Html For Beginners [instructor] => Salam Khan [active] => Yes )
				$id=$row2['id'];
				$title=$row2['title'];
				$image_name=$row2['image'];
				$instructor=$row2['instructor'];
				$price='sds';//$row['price'];

				

?>
						  		<!--courses item starts-->

								<div class="col-md-6 col-lg-3">
									<div class="courses-item">
										
										<a href="<?php echo SITEURL; ?>course-details.php?course_id=<?php echo $id; ?>" class="link">
											<div class="courses-item-inner">
												<div class="img-box">
													<img src="<?php SITEURL; ?>img/admin/course/<?php echo $image_name; ?>" alt="course img" style="height:175px; width:300px">
												</div>
												<h3 class="title"><?php echo $title;?></h3>
												<div class="instructor">
													<img src="img/instructor/1.png" alt="insrtucting">
													<span class="instructor-name"><?php echo $instructor; ?></span>
												</div>
												<div class="rating"></div>
													<span class="average-rating">(4.5)</span>
													<span class="average-stars">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star-half-alt"></i>
													</span>
													<span clas reviews>(230)</span>
												<div class="price">$ 49</div>
											</div>
										</a>
									</div>
								</div>

							<!--courses item ends-->
							<?php }} ?> 
					
					
						  	</div>
						  </div>
						 
						 <?php $cc++; }} ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 mt-3">
						<!--pagination starts-->
						<nav aria-label="Page navigation">
						  <ul class="pagination justify-content-center">
						    <li class="page-item">
						      <a class="page-link" href="#" aria-label="Previous">
						        <i class="fas fa-chevron-left"></i>
						      </a>
						    </li>
						    <li class="page-item"><a class="page-link" href="#">1</a></li>
						    <li class="page-item"><a class="page-link" href="#">2</a></li>
						    <li class="page-item active"><a class="page-link" href="#">3</a></li>
						    <li class="page-item"><a class="page-link" href="#">4</a></li>
						    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
						    <li class="page-item"><a class="page-link" href="#">10</a></li>
						    <li class="page-item">
						      <a class="page-link" href="#" aria-label="Next">
						         <i class="fas fa-chevron-right"></i>
						      </a>
						    </li>
						  </ul>
						</nav>
						<!--pagination ends-->
					</div>
				</div>
			</div>
		</section>
		<!--course section ends-->
		<?php include('partials/footer.php'); ?>

