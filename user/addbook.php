<?php
    session_start();
    include "../helper.php";
    include "../dbcon/dbcon.php";
    if (isset($_POST["submit"])) {
        if ($_FILES["cover"]["error"] === UPLOAD_ERR_OK) {
            $v = image_validator(strtolower(pathinfo($_FILES["cover"]["name"], PATHINFO_EXTENSION)), $_FILES["cover"]["size"]);
            if ($v == 1) {
                echo "file type not valid!";
            } elseif ($v == 2) {
                echo "file size not valid!";
            } elseif ($v == 0) {
                move_uploaded_file($_FILES["cover"]["tmp_name"], $_SESSION["user_login"]."/".$_FILES["cover"]["name"]);
            } else {
                echo "An error occurred while uploading file<br>Please try later!";
            }
            if (mysqli_query($con, "INSERT INTO book VALUES(NULL,".$_SESSION["user_login"].",'".$_POST["bname"]."','".$_POST["aname"]."',".$_POST["category"].",'".$_SESSION["user_login"]."/".$_FILES["cover"]["name"]."',NULL,NULL)")) {
                echo "book added successfully";
            } else {
                echo "server error";
            }
        } else {
            echo "invalid file";
        }
    }
?>
		<?php  include "./header.php";
        include "./sidebar.php"; ?>
		<br><br><br>
		
		<div class="col-md-10 mt-4">
			<h1 class="text-center">Add Your Book</h1>
			<div class="w-50 mx-auto">
			<form method="post" enctype="multipart/form-data">
				<div class="form-group">
					<input type="text" class="form-control" name="bname" placeholder="Enter book name">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="aname" placeholder="Enter author name">
				</div>
				<div class="form-group">
					<label for="category">Select Category</label>
					<select name="category" id="category" class="form-control">
						<option value="">--CATEGORY--</option>
						<option value="1">Science</option>
						<option value="2">Fantasy</option>
						<option value="3">Adventure</option>
						<option value="4">Romance</option>
						<option value="5">Contemporary</option>
						<option value="6">Mystery</option>
						<option value="7">Horror</option>
						<option value="8">Thriller</option>
						<option value="9">History</option>
						<option value="10">Cooking</option>
						<option value="11">Art</option>
						<option value="12">Motivational</option>
						<option value="13">Health</option>
						<option value="14">Travel</option>
						<option value="15">Guide</option>
						<option value="16">Children</option>
					</select>
				</div>
				<div class="form-group">
					<label for="cover">Upload Front Cover Photo</label> 
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="cover" name="cover">
						<label for="image" class="custom-file-label">Choose File</label>
					</div>
					<small class="form-text text-muted">Photo size must be less then 512 KBs.</small>
				</div>
				<input type="submit" name="submit" class="btn btn-outline-dark btn-block">
			</form>
			</div>
		</div>


</div>
</div>
		
<?php include_once './footer.php'; ?>

<script type="text/javascript">
	document.title = "Add Book";
</script>