<?php
$target = "uploads/" . basename($_FILES['uploadedfile']['name']);
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target)) {
    echo "File uploaded successfully!";
} else {
    echo "Error uploading file.";
}
?>
