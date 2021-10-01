<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style type="text/css">
    body {
        background-color: #B0E0E6;
        margin : 200px;
    }
    .login {
        margin: 250px auto;
        width: 400px;
        padding: 10px;
        border: 1px solid #ccc;
        background: lightblue;
    }
    input[type=text], input[type=password] {
        margin: 5px auto;
        width: 100%;
        padding: 10px;
    }
    input[type=submit] {
        margin : 5px auto;
        float: right;
        padding: 5px;
        width: 90px;
        border: 1px solid #fff;
        color: #fff;
        background: red;
        cursor: pointer;
    }
</style>
<body>
    <form action="index.php" method="post">
    <h2><center>KASIR RESTORAN</center></h2>
        <center>
        <table>
   <tr> <td>Username </td>
   <td>:</td>
   <td><input type="text" name="us"><br></td>
</tr> 
<tr>
    <td>Password </td>
    <td>:</td>
    <td><input type="password" name="ps"><br></td>
</tr>
<tr>
<td></td><td></td>
   <td><input type="Submit" name="Masuk" value="Masuk"></td>
    <br>
</tr>
</center>
</form>
</body>
</html>