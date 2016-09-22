<?php

$link_id = mysql_connect("localhost", "root", "abc123") or die("cannot connect");
if ($link_id) {
    mysql_select_db("test");
    if (!$_REQUEST[id]) {
        $result = mysql_query("select * from mydb");
        while ($row = mysql_fetch_array($result)) {
            echo "<TABLE border=1>";
            echo "<TR><TD>" . $row['id'] . "</TD>
                <TD>" . $row['name'] . "</TD>
                 <TD>" . $row['message'] . "</TD>
                 <TD>" . $row['date'] . "</TD>
                 <TD>" . "delete failed" . "</TD>
                </TR>";
            echo "</TABLE>";
        }
    } else {
        $sql = "delete from mydb where id=" . $_REQUEST[id];
        $result = mysql_query($sql);
        if ($result)
            echo "<script type='text/javascript' language='javascript'>alert('delete successfully')</script>";
        else
            echo "<script type='text/javascript' language='javascript'>alert('delete failed')</script>";
    }
    
}
?>
<script  type="text/javascript" language="javascript">
         location.href="message_board.php";
</script>