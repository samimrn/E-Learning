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

								<option value="0">No Courses Found</option>

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
					<td colspan="2">
						<input type="submit" name="submit" value="Add Course" class="btn-secondary">
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

                $title = $_POST['title'];
				$course = $_POST['course'];


				//insert into db
				//create sql query to save or add food

				$sql2 = "INSERT INTO tbl_chapter SET
					course_id = $course,
                    name = '$title',
					active = '$active'

					";

				//execute query
				$res2 = mysqli_query($conn,$sql2);

				//check whether data inserted or not

				//redirect with msg to manage food page

				if ($res2 == true) 
				{
					//data inserted successfully
					$_SESSION['add'] = "<div class='success'>Chapter added successfully.</div>";
					header('location:'.SITEURL.'admin/manage-chapter.php');
				}
				else
				{
					//failed to insert data
					$_SESSION['add'] = "<div class='error'>Failed to add CHapter.</div>";
					header('location:'.SITEURL.'admin/manage-chapter.php');
				}
			}
		?>

	</div>
</div>
