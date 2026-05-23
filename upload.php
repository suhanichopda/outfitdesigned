<?php
if(isset($_POST['upload'])){
  $file = $_FILES['image']['name'];
  move_uploaded_file($_FILES['image']['tmp_name'], "uploads/".$file);
  echo "Uploaded!";
}
?>

<form method="POST" enctype="multipart/form-data">
  <input type="file" name="image">
  <button name="upload">Upload</button>
</form>