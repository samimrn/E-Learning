<?php  
	include('admin-partials/header.php');
?>

<div class="main-content">
	<div class="wrapper">
		<h1>Add Course</h1>
		<br><br>

		<?php  
			if (isset($_SESSION['upload'])) 
			{
				echo $_SESSION['upload'];
				unset($_SESSION['upload']);
			}
		?>

		<form method="POST" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>Title:</td>
                    <td>
                    <input type="text" name="title">
                    </td>
                </tr>


                <tr>
					<td>Course:</td>
					<td>
						<select name="course">

							<?php  

							//create php code to display categories from db
							//1.create sql to get all active categories from db
							$sql = "SELECT *FROM tbl_course WHERE active='Yes'";

							//executing query
							$res = mysqli_query($conn,$sql);

							//count rows to check whether we have caterogies or not
							$count =  mysqli_num_rows($res);

							//if count>0 we have categories
							if ($count>0)
							{
								while ($row = mysqli_fetch_assoc($res)) 
								{
									//get the details of categories
									$id = $row['id'];
									$title = $row['title'];
                            
									?>

									<option value="<?php echo $id; ?>"><?php echo $title;  ?></option>

									<?php

								}
							}

							//else we don't have categories
							else
							{
								?>

								<option value="0">No Course Found</option>

								<?php

							}

							//2.display on drop down

							?>

						</select>
					</td>
				</tr>
               
				<tr>
					<td>Chapter:</td>
					<td>
						<select name="chapter">

							<?php  

							//create php code to display categories from db
							//1.create sql to get all active categories from db
							$sql = "SELECT *FROM tbl_chapter WHERE active='Yes'";

							//executing query
							$res = mysqli_query($conn,$sql);

							//count rows to check whether we have caterogies or not
							$count =  mysqli_num_rows($res);

							//if count>0 we have categories
							if ($count>0)
							{
								while ($row = mysqli_fetch_assoc($res)) 
								{
									//get the details of categories
									$id = $row['id'];
									$title = $row['name'];
                            
									?>

									<option value="<?php echo $id; ?>"><?php echo $title;  ?></option>

									<?php

								}
							}

							//else we don't have categories
							else
							{
								?>

								<option value="0">No Chapter Found</option>

								<?php

							}

							//2.display on drop down

							?>

						</select>
					</td>
				</tr>

				<tr>
					<td>Active:</td>
					<td>
						<input type="radio" name="active" value="Yes">Yes
						<input type="radio" name="active" value="No">No
					</td>
				</tr>


				<tr>
					<td>Upload PDF:</td>
					<td>
						<input type="file" name="pdf" value="" required>
					</td>
				</tr>
			
				<tr>
					<td colspan="2">
						<input type="submit" name="submit" value="Add Lesson" class="btn-secondary">
					</td>
				</tr>

			</table>
		</form>

		<?php  
			//check whether the button is clicked or not 
			if(isset($_POST['submit']))
			{
				//add the course in db

				//upload the image if selected
				//check whether the image is clicked or not and upload the image only if the image is selected
				

				if(isset($_POST['active']))
				{
					$active = $_POST['active'];
				}
				else
				{
					$active = "No";//setting the default value
				}

				$pdf=$_FILES['pdf']['name'];
				$pdf_type=$_FILES['pdf']['type'];
				$pdf_size=$_FILES['pdf']['size'];
				$pdf_tem_loc=$_FILES['pdf']['tmp_name'];
				$pdf_store="../pdf/".$pdf;

				move_uploaded_file($pdf_tem_loc,$pdf_store);





                $title = $_POST['title'];
				$course = $_POST['course'];
                $chapter = $_POST['chapter'];


				//insert into db
				//create sql query to save or add food

				$sql2 = "INSERT INTO tbl_lesson SET
					course_id = $course,
                    chapter_id = $chapter,
                    name = '$title',
					pdf='$pdf',
					active = '$active'

					";

				//execute query
				$res2 = mysqli_query($conn,$sql2);

				//check whether data inserted or not

				//redirect with msg to manage food page

				if ($res2 == true) 
				{
					//data inserted successfully
					$_SESSION['add'] = "<div class='success'>Lesson added successfully.</div>";
					header('location:'.SITEURL.'admin/manage-lesson.php');
				}
				else
				{
					//failed to insert data
					$_SESSION['add'] = "<div class='error'>Failed to add Lesson.</div>";
					header('location:'.SITEURL.'admin/manage-lesson.php');
				}
			}
		?>

	</div>
</div>
