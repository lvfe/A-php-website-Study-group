<html>
    <head>
        <meta charset="UTF-8" />
        <title>Message Board - Study Group</title>
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
                    <li class="current"><a href="message_board.php">Message Board</a></li>
                </ul>
            </div>
            <div id="content">
                <div id="page">
                    <h3>Message Board</h3>
                    <p><strong>You can leave a question for us to improve!</strong></p>
                    <p><stong>focus:</stong>administrator can delete a message</p>
                </div>
                <div>
                    <form method="post">
                        <table>
                            <tr>
                                <td>Name</td>
                                <td><input type="text" name="name"/></td>
                            </tr>
                            <tr>
                                <td valign="top">Message</td>
                                <td><textarea rows="10" cols="30"name="message"/></textarea><td>
                            </tr>
                            <tr><td></td>
                                <td><input type="submit" value="Submit" name="submit"/><td>
                            </tr>
                        </table> 
                    </form>
                </div>
                <hr>

                <?php
                error_reporting(0);
                $con = mysql_connect("localhost", "root", "abc123");
                if (!$con) {
                    die('Could not connect: ' . mysql_error());
                }

                mysql_select_db("test", $con);
                if ($_REQUEST["submit"]) {
                    $sql = "INSERT INTO mydb (name,message,date) VALUES ('$_POST[name]', '$_POST[message]',now())";
                    $record = mysql_query($sql, $con);

                    echo "<script type='text/javascript'>alert('add one!');</script>";
                }

                $query = "SELECT * FROM mydb ";
                $leave = mysql_query($query);
                $row = mysql_fetch_array($result);
                if ($leave) {
                    for ($i = mysql_num_rows($leave) - 1; $i >= 0; $i--) {

                        $name = mysql_result($leave, $i, "name");
                        $message = mysql_result($leave, $i, "message");
                        $date = mysql_result($leave, $i, "date");
                        $id=mysql_result($leave, $i, "id");
                        echo "<table border=\"1\"  height=\"70\" align=\"centre\">
                    <tr align=\"center\">
                       <form name='del' action='deleteMessage.php?id=".$id."' method='post'>
                        <td><input name='del' type='submit' value='delete' /></td>
                        <td><font color=green>$date</font></td>
                        <td><font color=blue>$name</font></td>
                        <td><font color=black>$message</font></td>
                        </form>
                    </tr></table>";
                    }
                } else {
                    echo "<script type='text/javascript'>alert('Error!');</script>";
                }

                mysql_close($con);
                //                
                ?>
            </div>
            <div id="footer">
                <div>
                    <div id="connect">
                        <a href="http://facebook.com" target="_blank"><img src="images/icon-facebook.gif" alt="Facebook" /></a>
                        <a href="http://twitter.com" target="_blank"><img src="images/icon-twitter.gif" alt="Twitter" /></a>
                        <a href="http://www.youtube.com" target="_blank"><img src="images/icon-youtube.gif" alt="Youtube" /></a>
                    </div>
                    <div class="section">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="guide.php">Guide</a></li>
                            <li><a href="study_abroad.php">Study Abroad</a></li>

                            <li><a href="career.php">Work</a></li>
                            <li class="last"><a href="message_board.php">Message Board</a></li>
                        </ul>
                        <p>&copy; Copyright 0000. Company Name. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>