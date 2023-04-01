<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="../styles/t-homepage.css">
    <link rel="stylesheet" href="../styles/city.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
    <script src="../togglebtn.js" defer></script>
    <title>Sigiriya</title>
</head>
<body style = "background-image: url(sigiriya.png); background-size: cover; background-repeat: no-repeat ; background-attachment: fixed;">
<div class="header-bar">
            <div class="about">
                <img class="logo" src="../images/logo.jpg">
                <p class = "name">T-GUIDE</p>
            </div>
            <a href="#" class="toggle-btn">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </a>
            <div class="navigation-bar">
                <ul>
                    <li><a href="../1stpage.php"><i class="fa fa-home" ></i>HOME</a></li>
                    <li><a href=""><i class="fa fa-map-marker"></i>LOCATIONS<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                        <div class="drop-menu">
                            <ul>
                                <li><a href="colombo.php">Colombo</a></li>
                                <li><a href="ella.php">Ella</a></li>
                                <li><a href="hikkaduwa.php">Hikkaduwa</a></li>
                                <li><a href="kandy.php">Kandy</a></li>
                                <li><a href="sigiriya.php">Sigiriya</a></li>
                            </ul>
                        </div></li>
                    <li><a href="../contactus.html"><i class="fa fa-phone-square" ></i>CONTACT-US</a></li>
                </ul>
            </div>
        </div>
        <div class='output-div'>
        <?php
        include("../connection.php");
        
            $sql = "select * from user where location = 'sigiriya'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                while ($row = mysqli_fetch_assoc($result)){
                    $id = $row['userid'];
                    $sqlImg = "SELECT * FROM profileimg WHERE userid = '$id'";
                    $resultImg = mysqli_query($conn, $sqlImg);
                    while ($rowImg = mysqli_fetch_assoc($resultImg)){
                        
                        echo "<div class='touristg-card'>";
                            echo "<div class='img-ele'>";
                            if($rowImg['status'] == 0){
                                echo "<img src = '../uploads/profile".$id.".jpg' class='profile-img'>";
                            }else{
                                echo "<img src = '../uploads/basic.jpg' class='profile-img'>";
                            }
                            echo "</div>";
                            echo "<div class='info-ele'>";
                            echo "<table class='t-table'>
                                <tr>
                                    <td>Full Name:</td>
                                    <td>".$row['full_name']. "</td>
                                </tr>
                                <tr>
                                    <td>Age:</td>
                                    <td>".$row['age']. "</td>
                                </tr>
                                <tr>
                                    <td>Location:</td>
                                    <td>".$row['location']. "</td>
                                </tr>
                                <tr>
                                    <td>Contact No:</td>
                                    <td>".$row['contact_no']. "</td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td>".$row['email']. "</td>
                                </tr>
                            </table>";
                            echo "</div>";
                        echo "</div>";
                        
                    }
                }
            }else{
                echo "There are no users yet";
            }
    ?>
        </div>
</body>
</html>

