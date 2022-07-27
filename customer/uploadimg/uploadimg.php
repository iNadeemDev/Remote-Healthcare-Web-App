<?php
    $con = mysqli_connect("localhost","root","", "test");
    if(!$con){
        echo 'Connection Error';
    }

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $file = $_FILES['file'];
        $filename = $file['name'];

        $fileErr = $file['error'];
        $filetemp = $file['tmp_name'];
        $fileExt = explode('.', $filename);
        $fileExtLower = strtolower(end($fileExt));

        $allowedext = array('jpg', 'jpg', 'jpeg');

        if(in_array($fileExtLower , $allowedext)){
            $destFile = 'images/'.$username.'.'.$fileExtLower; //destination image filename
            move_uploaded_file($filetemp , $destFile);
            //********* NOW FILE IS STORED IN INTERNAL FOLDER *********/
            //******* NOW UPLOAD IT TO THE DATABASE ***********/
            mysqli_query($con , "INSERT INTO images (username, image) VALUE ('$username','$destFile')");

            //******************NOW DISPLAY THE IMAGE AND USERNAME **************/

            $result = mysqli_query($con , "SELECT * FROM images");
            $row = mysqli_fetch_array($result);

            echo $row['username'];
            echo '<br><br>';
            echo "<img src=".$row['image'].">";
        }
    }
?>