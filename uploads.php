<?php   
    if (isset($_POST['submit'])){
        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileTyper = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg','jpeg','png');

        if (in_array($fileActualExt, $allowed)){
            if($fileError === 0){
                if($fileSize < 100000){
                    $fileNameNew = uniqid('', true). ".". $fileActualExt;
                    $fileDestination = 'uploads/'. $fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: test.php?uploadsuccess");
                }else{
                    echo "Your file is too big!";
                }
            }else{
                echo "There was an error upload!";
            }
        }else{
            echo "You cannot upload files of this type!";
        }
    }
?>