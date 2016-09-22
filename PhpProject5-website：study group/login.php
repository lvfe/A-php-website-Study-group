<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" language="javascript">

    
    function checkLogin(){
        var uname = document.getElementById('loginName').value;
        var upass = document.getElementById('loginPass').value;
        if(uname=="admin" ){
            if(upass=="admin"){
                alert("login successfully!");
                window.location.href="index.php";
                }
           }
        else{
            alert('Error!please reput ');
        }
    }
</script>
</head>

<body style="font-size:12px;" bgcolor="#FFFAF0">
<form id="loginForm" action=""  method="POST">
<div  class="div">
if you are the administrator，please<font color="Red">log in</font>：
<table bgcolor="#00BFFF"  cellspacing="0" cellpadding="10">
<tr><td>Admin Name：</td><td><input name="loginName" type="text" value="admin" id="loginName"/></td><td><span id="d1"></span></td></tr>
<tr><td>Password：</td><td><input name="loginPass" type="password" value="admin" id="loginPass"/></td><td><span id="d2"></span></td></tr>
<tr><td colspan="3" align="center"><input name="submit" type="button"  onclick="checkLogin();" value="login" /></td></tr>
</table>
</div>
</form>

</body>
</html>