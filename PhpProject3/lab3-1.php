<html>
<head>
Order your business card here
</head>
<body>
<div>
     <form method="post">
	 <label for="company">Campany........:</label>
	 <input type="text" name="company" />
	 <br />
	 <label for="a2">Lastname.......:</label>
	 <input type="text" name="Lname"  />
	 <br />
	 <label for="a3">Firstname......:</label>
	 <input type="text" name="fname" />
	 <br />
	 <label for="a4">Title..........:</label>
	 <input type="text" name="title" />
	 <br />
	 <label for="a5">Telephone......:</label>
	 <input type="text" name="tele" />
	 <br />
	 <label for="a6">E-mail.........:</label>
	 <input type="text" name="email" />
	 <br />
	 <label for="a7">Backgroundcolor:</label>
	 <select name="backgroundcolor" >
        <option value="LightBlue">light blue</option>
        <option value="LightYellow">light yellow</option>
        <option value="White">white</option>
        <option value="ForestGreen">forest green</option>
     </select>
     <br />
	 <label for="a8">Textcolor......:</label>
	 <select name="textcolor" >
        <option value="Black">black</option>
        <option value="Blue">blue</option>
        <option value="Red">red</option>
        <option value="DarkGreen">dark green</option>
     </select>
     <br />
	 <label for="a9">Font...........:</label>
	 <select name="font" >
        <option value="Verdana">verdana</option>
        <option value="Arial">arial</option>
        <option value="Tahoma">tahoma</option>
        <option value="Impact">impact</option>
     </select>
	 <br />
	 <input type="submit" value="Reset" name="reset"/>
	 <input type="submit" value="Print" name="print" />
	  </ form>  
</div>
<?php
if(isset($_REQUEST["print"]))
{
    echo "<body bgcolor=".$_POST["backgroundcolor"].">";   
    echo "<font color=".$_POST["textcolor"].">";
    echo "<font face=".$_POST["font"].">";
    echo "<h1>"."my card"."</h1>";
    echo "<p> "."Company...:".$_POST["company"]."</p>";
    echo "<p> "."Lastname..:".$_POST["Lname"]."</p>";
    echo "<p> "."Firstname.:".$_POST["fname"]."</p>";
    echo "<p> "."Title........:".$_POST["title"]."</p>";
    echo "<p> "."Telephone.:".$_POST["tele"]."</p>"; 
    echo "<p> "."E-mail......:".$_POST["email"]."</p>";
}
    
?>
</body>
</html>