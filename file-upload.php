<?php
if(isset($_FILES['image'])){
//    echo "<pre>";
//    print_r($_FILES);
//    echo "</pre>";

    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
// upload images on server by your img/file

    // if condition show message for any reason file not uploaded.
    if (move_uploaded_file($file_tmp,"img/" . $file_name)){
        echo "file successfully uploaded ";
    } else{
        echo "Could not upload the file.";
    }


}

?>
<body>
<!--// if we use input type file then we have to use this property-->
<form action="" method="POST" enctype="multipart/form-data">

     <input type="file" name="image"> <br><br>
    <input type="submit">

</form>
</body>
</html>