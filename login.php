<?php

session_start();
include("connection.php");
extract($_POST);

$sql = "select * from user where email = '$email' and password = '$pass'";
$result = mysqli_query($conn, $sql);
$nor = mysqli_num_rows($result);

if($nor > 0){
    while($row = mysqli_fetch_row($result)){
        $_SESSION['id'] = $row[0];
        echo '<html>
        <head>
            <link rel = "stylesheet" href = "styles/login.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
            <link rel="stylesheet" href="styles/t-homepage.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
            <script src="togglebtn.js" defer></script>
        </head>
        <body style = "background-image: url(images/'.$row[3].'.jpg); background-size: cover; background-repeat: no-repeat ; background-attachment: fixed;">
        <div class="header-bar">
            <div class="about">
                <img class="logo" src="images/logo.jpg">
                <p class = "name">T-GUIDE</p>
            </div>
            <a href="#" class="toggle-btn">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </a>
            <div class="navigation-bar">
                <ul>
                    <li><a href="1stpage.php"><i class="fa fa-home" ></i>HOME</a></li>
                    <li><a href=""><i class="fa fa-map-marker"></i>LOCATIONS<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                        <div class="drop-menu">
                            <ul>
                                <li><a href="cities/colombo.php">Colombo</a></li>
                                <li><a href="cities/ella.php">Ella</a></li>
                                <li><a href="cities/hikkaduwa.php">Hikkaduwa</a></li>
                                <li><a href="cities/kandy.php">Kandy</a></li>
                                <li><a href="cities/sigiriya.php">Sigiriya</a></li>
                            </ul>
                        </div></li>
                    <li><a href="contactus.html"><i class="fa fa-phone-square" ></i>CONTACT-US</a></li>
                </ul>
            </div>
        </div>
        <div class ="container1">
        <div class="profile-box">
        <div class="profile-left">
            <img class = "image" src = "uploads/profile'.$row[0].'.jpg">
            <p> Profile image </p>
        </div>
        <div class="profile-right">
            <form action="update.php" method = "post">
                <div class="input-row">
                   <div class="input-group">
                       <label for="">Full Name</label>
                       <input type="text" name="name" value = "'.$row[1].'">
                   </div> 
                   <div class="input-group">
                        <label for="">Email</label>
                        <input type="text" name="email" value = "'.$row[5].'">
                    </div>
                   <div class="input-group">
                        <label for="">Password</label>
                        <input type="text" name="pwd" value = "'.$row[6].'">
                    </div>
                   <div class="input-group">
                        <label for="">Age</label>
                        <input type="text" name="age" value = "'.$row[2].'">
                     </div> 
                     <div class="input-group">
                        <label for="">Location</label>
                        <input type="text" name="location" value = "'.$row[3].'">
                    </div> 
                    <div class="input-group">
                        <label for="">Contact No</label>
                        <input type="text" name="contact" value = "'.$row[4].'">
                    </div>
                </div>
                <div>
                    <input class ="updatebtn" type ="submit" name="upload" value ="Update Details">
                    <input class ="updatebtn" type ="reset" name="upload" value ="Reset Details">
                </div>
            </form>
        </div>
        </div>
        </div>
        </body>
        </html>   
        ';
    }
}else{
    
    echo '<script>alert("Incorrect Email or Password")</script>';
    
}

?>