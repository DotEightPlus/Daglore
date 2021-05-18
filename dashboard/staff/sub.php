<?php
include("functions/init.php");
$target_dir = "upload/downloads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"]) && !empty($_FILES["fileToUpload"]["name"])){

// Allow certain file formats
if($imageFileType != "pdf") {
   $errors[] = "Sorry, only PDF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   $errors[] = "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $errors[] ="The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        header("location: ./up");
    } else {
        $errors[] = "Sorry, there was an error uploading your file.";
    }
}
}
if(!empty($errors)) {

            foreach ($errors as $error) {
        
                echo validation_errors($error); 

            }

    } // post request
?>