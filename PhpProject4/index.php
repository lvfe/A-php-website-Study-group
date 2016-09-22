<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style type="text/css">
        
    </style>

</head>
<body>
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
        <hr>

        <?php
        error_reporting(0);
        $con = mysql_connect("localhost", "root", "abc123");
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }

        mysql_select_db("test", $con);

        if ($_REQUEST["submit"]) {
            $sql = "INSERT INTO my_db VALUES (now(),'$_POST[name]', '$_POST[message]')";
            $record = mysql_query($sql, $con);
            echo "<script type='text/javascript'>alert('add one!');</script>";
        }

        $query = "SELECT * FROM my_db ";
        $leave = mysql_query($query);
        if ($leave) {
            for ($i = mysql_num_rows($leave); $i >= 0; $i--) {
                $date = mysql_result($leave, $i, "date");
                $name = mysql_result($leave, $i, "name");
                $message = mysql_result($leave, $i, "message");
                echo "<table>
                        <tr>
		                  <td><font color=green>$date</font></td>
			          <td><font color=blue>$name</font></td>
			          <td><font color=black>$message</font></td>
		              </tr></table>";
            }
        } else {
            echo "<script type='text/javascript'>alert('Error!');</script>";
        }

        mysql_close($con);
//                
        ?>
</body>
</html>

