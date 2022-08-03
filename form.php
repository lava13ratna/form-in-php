

<!DOCTYPE html>
<html>
<body>

<form action="form.php" method="post" enctype="multipart/form-data">
  Select image to upload:
 
  <input type="hidden" name="MAX_FILE_SIZE" value="100000">
  <input type="file" name="fileSelectField" id="fileSelectField" value="">
  <input type="submit" value="submit" name="submit">
</form>


<?php

if(isset($_POST["submit"]))
{
  $filename=$_FILES["fileSelectField"]["name"];
  $filetype=$_FILES["fileSelectField"]["type"];
  $filesize=$_FILES["fileSelectField"]["size"];
  echo ($filename."<br>".$filetype."<br>".$filesize)."<br>"; 
 /*  if ($filesize> 100000) die( "File too big!");
  else die("file uploaded successfully"); */
  
  if ( move_uploaded_file( $_FILES["fileSelectField"]["tmp_name"], "C:\\xampp\\photo.jpg" ) ) {
 echo "Your file was successfully uploaded.";
} else {
 echo "There was a problem uploading your file - please try again.";
}
}

?>
</body>
</html>
