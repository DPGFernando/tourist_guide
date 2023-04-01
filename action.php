<?php
    include("connection.php");
    
    $full = $_POST['f_name'];
    $Age = $_POST['age'];
    $loc = $_POST['location'];
    $contact = $_POST['con_no'];
    $email = $_POST['mail'];
    $pwd = $_POST['pass'];

    $sql = "insert into user (full_name, age, location, contact_no, email, password) values ('$full', '$Age', '$loc', '$contact', '$email', '$pwd')";
    mysqli_query($conn,$sql);

    $sql1 = "select * from user where full_name = '$full' and contact_no = '$contact'";
    $result = mysqli_query($conn, $sql1);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $userid = $row['userid'];
            $sql2 = "insert into profileimg (userid, status) values ('$userid', 1)";
            mysqli_query($conn, $sql2);
        }
    }else{
        echo "You have an error";
    }

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
                    $fileNameNew = "profile".$userid.".". $fileActualExt;
                    $fileDestination = 'uploads/'. $fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    $sql = "UPDATE profileimg SET status=0 where userid = '$userid'";
                    $result = mysqli_query($conn,$sql);
                    header("Location: 1stpage.php?uploadsuccess");
            }else{
                echo "There was an error upload!";
            }
        }else{
            header("Location: 1stpage.php");
        }
    }
?>