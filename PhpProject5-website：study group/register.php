<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Register - study group</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <!--[if IE 6]>
                <link rel="stylesheet" type="text/css" href="ie6.css" />
        <![endif]-->
    </head>

    <body>
        <div id="page">
            <div id="header">
                <div id="section">
                    <div><a href="index.php"><img src="images/logo1.jpg" alt="Logo" /></a></div>
                    <span>Author:Fengjiao Lv <br /><br />Email:fengjiao0313@gmail.com</span>
                </div>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="guide.php">Guide</a></li>
                    <li><a href="study_abroad.php">Study Abroad</a></li>
                    <li><a href="career.php">Work</a></li>
                    <li><a href="message_board.php">Message Board</a></li>
                </ul>
            </div>
            <div id="body">  
                <div class="contents">
                    <h1>REGISTRATION</h1>
                    <div class="registration">
                        <p>
                            For a better understanding,you can registration as a user.
                        </p>
                        <form action="" method="post">
                            <table cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr><td><label>First Name*</label></td><td><input type="text" value=""  name="firstname" /></td></tr>
                                    <tr><td><label>Last Name*</label></td><td><input type="text" value=""  name="lastname"/></td></tr>
                                    <tr><td><label>Email*</label></td><td><input type="text" value="" name="email"/></td></tr>
                                    <tr><td><label>Password*</label></td><td><input type="password"  value="" name="password"/></td></tr>
                                    <tr><td><label>Confirm Password*</label></td><td><input type="password" value="" name="conform" /></td></tr>
                                    <tr><td><label>Address</label></td><td><textarea name="address"></textarea></td></tr>
                                    <tr><td><label>Phone</label></td><td><input type="text" value="" class="txtfield" name="phone"/></td></tr>
                                    <tr><td colspan="2"><input type="checkbox" class="checkbox" /><label>Join Our Newsletter</label></td></tr>
                                    <tr><td colspan="2"><input type="checkbox" class="checkbox" /><label>I agree to the Terms of Use and Privacy Policy</label></td></tr>
                                    <tr><td colspan="2"><input type="submit" value="Submit" name="submit" class="button" /></td></tr>
                                    <tr><td colspan="2">* = Required Field</td></tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>  <!-- end of body wrapper -->
        </div>
        <div id="footer"> <!-- start of footer part -->
            <div>
                <span> &copy; Copyright &copy; 2010. <a href="index.htm">Company name.</a> All Rights Reserved </span>
            </div>
        </div> <!-- end of footer part -->
        <?php
          error_reporting(0);
        $con = mysql_connect("localhost", "root", "abc123");
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }

        mysql_select_db("test", $con);

        if ($_REQUEST["submit"]) {
            $sql = "INSERT INTO study_group(firstname,lastname,email,password,address,phone) VALUES ($_POST[firstname],'$_POST[lastname]', '$_POST[email]','$_POST[password]','$_POST[address]','$_POST[phone]')";
            $record = mysql_query($sql, $con);
            echo "<script type='text/javascript'>alert('register successfully!');</script>";
            echo "welcome " . $_POST[firstname] . $_POST[lastname] . "!";
            echo"<h><a href='index.php'>back to home</a></h>";
        }

        
//                
        ?>



    </body>
</html>

