<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    session_destroy();
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $db_name = "note";
        $connec = new mysqli($servername,$username,$password,$db_name);
       session_start();
        $_SESSION['user'] = $_POST['email'];
        $_SESSION['pass'] = $_POST['password'];
        $pswd1= $connec->real_escape_string($_SESSION['pass']);
        $pswd2 = hash('sha512',$pswd1);
        $email = $connec->real_escape_string($_SESSION['user']);
        $sql = "SELECT email,password FROM user_authentication";
        $result = $connec->query($sql);
        $flag = 0;
        while($row = $result->fetch_assoc()){
        if($email==$row['email']&&$pswd2==$row['password']){
            $flag=1;
            echo $_SESSION['user'];
            header('Location:../note.php');
        }
    }
    if($_SESSION['user']==""&&$_SESSION['pass']==""){
        header("Location:index.html");
    }
    if($flag==0){
            echo '<h2>' . 'Wrong credentials' . '</h2>';
        }
    ?>
</body>
</html>