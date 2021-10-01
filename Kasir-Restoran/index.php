<?php

class index
{
    public function __construct(){
    }

    public function login(){
//form login
echo "
<head>
<title>Login</title>
<style>
body{
    background-color:#B0E0E6;
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
</head>
<body>
    <center>
    <form action='' method='POST'>
    <h2>KASIR RESTORAN</h2><p>
    <table border=2 frame='void'><tr><td>
    <table>
    <td><table>
    <tr><td>Username </td> <td> <input type='text' name='us'></td></tr> 
    <tr><td>Password </td><td> <input type='password' name='ps'></td></tr>
    <tr><td><input type='Submit' name='Masuk' value='Masuk'></td></tr>
    </table></td></tr>
    </table>
    </td></tr>
    </table>
</form>
</body>
";
    }

    public function beranda($us){
    //form beranda
    echo "";
    }

    public function __destruct(){
    }
}

$proses = new index();
$us =@$_POST['us'];
$ps =@$_POST['ps'];
    
    $server ="localhost";
    $user ="root";
    $password ="";
    $nama_database ="sidang-projek";
    
    $db = mysqli_connect($server,$user,$password,$nama_database);
    
    if($db){
        $sql = "SELECT * FROM login WHERE username LIKE '$us' AND password = '$ps' ";
        $query = mysqli_query($db, $sql);
    
        if ($data = mysqli_fetch_array($query)){
            header("location:home.php");    
        }else {
            $proses->login();
            if (($us != "") OR ($ps !="")){
                echo "Username dan/atau Password salah. Silahkan coba kembali.";
            }
        }   
    }



?>