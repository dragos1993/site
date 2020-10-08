<?php
if (isset($_POST['submit'])){
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTpmName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'tif', 'gif', 'mp4', 'avi', 'm4p', 'mpg', 'mpe', 'mpv', 'ogg', 'wmv', 'zip', 'tar', 'gzip', 'b2zip');

    if (in_array($fileActualExt, $allowed )) {
        if ($fileError === 0) {
                if ($fileSize < 10000000000) {
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = 'uploads/'.$fileName;
                    move_uploaded_file($fileTpmName, $fileDestination);
                  /*  header("Location: index.php?uploadsuccess"); */
                  echo 'Imaginea a fost incarcata cu succes!';
                }else{
                    echo "Fisierul este prea mare!";
                }
        } else {
            echo "Te rog sa incerci cu un alt tip de poza!";
        }
    } else {
        echo "te rog sa incerci cu un alt tip de poza!";
    }

}

?>