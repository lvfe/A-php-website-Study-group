<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>lab3-2</title>
    </head>
    <body>
        <table>
            <tr><td>IP</td><td>Date</td><td>Action</td></tr>
        <?php
        error_reporting(0);
        $old_ip="";
        $old_date="";
        $lista=array(); 

        $txt=fopen("access_log.txt", "r")or exit("unable to open the file");
        while(!feof($txt))
          {
                 array_push($lista,fgets($txt) );
          }
        fclose($txt);

        foreach ($lista as $key => $value) 
            {
            $sp=explode("-", $value);
            $sp_ip = $sp[0];
            $sp2 =explode(" ",$sp[2]);
            $sp_date = str_replace("[","",$sp2[1]);
            $sp_url = $sp2[4];

            if(($old_ip == $sp_ip)&&($old_date==$sp_date))
                continue;
            else{
                 echo ("<tr><td>".$sp_ip."</td><td>".$sp_date."</td><td>".$sp_url."</td></tr>");
                 $old_ip =$sp_ip;
                 $old_date = $sp_date;
                }
           }
        ?>
       </table>
        </body>
</html>
