<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href = "styles/1stpage.css">
        <title>Home Page</title>
    </head>
    <body style = "background-image: url(cover.png); background-size: cover; background-repeat: no-repeat ; background-attachment: fixed;">

        <div class="header">
            <div><p class="name">T-Guider</p></div>
            <div><img class = "logo" src = "images/logo.jpg"></div>
        </div>
        <div class="login">
            <p class="login-para1">Are you</p><br>
            <button onclick="location.href='t-homepage.html'">Tourist</button> 
            <p class="login-para2">or</p>
            <button class="tourist" onclick="openpop()">Tourist Guider</button>

            <div id="pop-up" class="pop-up">
                <form action="action.php" method="POST" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td class="info">Profile picture</td>
                            <td class="fill"><input type="file" name="file"></td>
                        </tr>
                        <tr>
                            <td class="info">Full Name</td>
                            <td class="fill"><input type="text" name="f_name"></td>
                        </tr>
                        <tr>
                            <td class="info">Age</td>
                            <td class="fill"><input type="text" name="age"></td>
                        </tr>
                        <tr>
                            <td class="info">Location</td>
                            <td class="fill"><select name="location" >
                                <option value="colombo">Colombo</option>
                                <option value="ella">Ella</option>
                                <option value="kandy">Kandy</option>
                                <option value="hikkaduwa">Hikkaduwa</option>
                                <option value="sigiriya">Sigiriya</option>
                              </select></td>
                        </tr>
                        <tr>
                            <td class="info">Contact No</td>
                            <td class="fill"><input type="text" name="con_no"></td>
                        </tr>
                        <tr>
                            <td class="info">Email</td>
                            <td class="fill"><input type="text" name="mail"></td>
                        </tr>
                        <tr>
                            <td class="info">Password</td>
                            <td class="fill"><input type="password" name="pass"></td>
                        </tr>
                        <tr>
                            <td class="info"><input type="submit" name="submit" value="Submit" class="submit"></td>
                            
                        </tr>
                    </table>
                </form>
                <table class="close-row">
                <tr>
                    <td class="info"><button class = "submit" onclick = "openpop1()">Login</button></td>
                    <td><button class="close" onclick="closepop()">Close</button></td>
                </tr>
                </table>
                <p class="contact-us">If you want to change your details please <a href="contactus.html">contact us</a></p>
            </div>
            <div class = "pop-up1" id = "pop-up1">
            <form action="login.php" method="POST" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td class="info">Email</td>
                            <td class="fill"><input type="text" name="email"></td>
                        </tr>
                        <tr>
                            <td class="info">Password</td>
                            <td class="fill"><input type="password" name="pass"></td>
                        </tr>
                        <tr>
                            <td class="info"><input type="submit" name="submit" value="Login" class="submit"></td>
                            <td class="info"><input type="reset" name="reset" value="Reset" class="reset"></td>
                        </tr>
                    </table>
            </form>
            <table>
                <tr>
                    <td class = "info"><button class="close" onclick="closepop1()">Close</button></td><td></td>
                </tr>
            </table>
            </div>
        </div>    

        <script>
            const pop = document.getElementById("pop-up");

            function openpop(){
                pop.classList.add("open-popup");
            }

            function closepop(){
                pop.classList.remove("open-popup");
            }
            
            const pop1 = document.getElementById("pop-up1");

            function openpop1(){
                pop1.classList.add("open-popup1");

                closepop();
            }

            function closepop1(){
                pop1.classList.remove("open-popup1");
            }
        </script>
    </body>
</html>