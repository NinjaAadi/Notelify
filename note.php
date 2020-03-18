<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location:./php/login.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="style/index.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+2&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Faster+One&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Wendy+One&display=swap" rel="stylesheet">
    <script src="index.js" type="text/javascript"></script>


</head>

<body>
     <!--Navbar begins-->
    <div id="navbar">
        <!--Logo-->
        <img src = "images/logo.png" id="logo">
        <!--Logo ends-->
       <p id="nav-text">Keep calm and take notes</p>
        <!--Navbar elements-->
        <div id="element-block">
            <ul id="element-list">
                <a><li  id="element-list-element">HOME</li></a>
                <a><li  id="element-list-element">SKETCH</li></a>
                <a><li id="element-list-element">IMPROVE US?</li></a>
            </ul>
        </div>
        <!--Elements end-->

        <!--Button-->
        <div id="button">
            <span id="button-elements-1"></span>
            <span id="button-elements-2"></span>
            <span id="button-elements-3"></span>
        </div>
        <!--End of buttons-->
    </div>
    <!--Navbar ends-->


    <!--Search your notes-->
    <div class="container d-flex"style="justify-content:center">
        <form id="search-form"action="">
             <input id="searchbox"type="text"placeholder="Search your notes">
             <button id="search-button"type="submit">Search</button>
        </form>
        <form id="search-form-1"action="./php/logout.php">
                <button id="search-button">LOGOUT</button>
            </form>
            <form id="search-form-2"action="take-notes.html">
                <button id="search-button">
                    + NEW NOTE
                </button>
            </form>
    </div>


     <div class="container d-flex" id="heading">
        <h1>TOPICS</h1>
    </div>


     <div id="feature"class="container">
        <div class="row">
                 
<?php
        $table =  $_SESSION['user'];
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $db_name = "note";
        $connec = new mysqli($servername,$username,$password,$db_name);
        $sql = "SELECT username FROM user_authentication WHERE email='".$table."'";
        $result =  $connec->query($sql);
        $row = $result->fetch_assoc();
        $db_name_2 = $row['username'];
        $_SESSION['db_name_user'] = $db_name_2;
        $connec1 = new mysqli($servername,$username,$password,$db_name_2);
        //echo $db_name_2;
        $sql1 = "SELECT * FROM notes";
        //value = "' . $row1['topic'] . '"
        $result1 = $connec1->query($sql1);
            WHILE($row1 = $result1->fetch_assoc()){
            echo '<div class="col-lg-4 col-md-4 d-flex" style="justify-content: center;align-content: center;align-items: center;">';
                echo '<form action="./show_note.php"method="POST">';
                    echo  '<button id="sketch_button" type="submit" name="submit" value = "'. $row1['topic'] .'">
                    <h2> '.$row1['topic'].'</h2>
                    </button>';
                echo '</form>';
            echo '</div>';
            }
       
       
?>
    </div>
    </div>

         <div class="container d-flex" id="feat">
        <h1>CONTACT US</h1>
    </div>
    <div class="container-fluid" id="footer">
        <div class="row">
            <div id="footer-inside"class="col-lg-6 col-sm-6">
                <h3 id="footer-header">Follow Us</h3>
                <div id="watsapp">
                    <a href=""><img style="background: white;"id="footer-image" src="./images/facebook.png"></a>
                </div>
                <div id="watsapp">
                     <a><img id="footer-image" src="./images/github.png"></a>
                </div>
                <div id="watsapp">
                     <a><img id="footer-image" src="./images/instagram.png"></a>
                </div>
            </div>
            <div id="footer-inside"class="col-lg-6 col-sm-6">
                <h3 id="footer-header">Contact Us</h3>
                <a href="mailto:aaditya7739008423@gmail.com"><button id="mail-button">MAIL US</button></a><br/>
                <a id="number" href="tel:+917903966014">+917903966014</a>
                <a><img id="footer-image-smit" src="images/smit logo.png"></a>
            </div>
        </div>
    </div>
 
</body>

</html>
<style>
body{
    padding:0px;
    margin: 0px;
}
#heading{
    margin-top: 250px;
    justify-content: center;
    font-family: 'Baloo 2', cursive;
}

#search-form{
    position: absolute;
    margin-top:100px;
    padding:10px;
}
#search-form-1{
    position: absolute;
    margin-top:0px;
    padding:10px;
    z-index:30;
    position: fixed;
}
#search-form-2{
    position: absolute;
    right:0px;
    margin-top: 100px;
    padding:10px;
    z-index:30;
    position: fixed;
}
#searchbox{
    width:700px;
    padding:18px;
    border-radius: 30px;
        border: 1px solid #c5c5c5;
    -webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
-moz-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
outline:none;
}
#searchbox:focus{
    border:2px solid #1E90FF;
}
#search-button{
    width:120px!important;
    font-size:12px;
    margin-left:10px;
    width:100px;
    padding:15px;
    border-radius: 30px;
            border: 1px solid #c5c5c5;
    -webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
-moz-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
outline:none;
background: #1E90FF;
color:white;
}
#search-button:focus{
    background:rgba(0, 0, 0, .8);
}
#sketch_button{
    background:white!important;
    width:300px!important;
    height:200px!important;
    margin-top:40px!important;
    color: black !important;
text-transform: uppercase!important;
text-decoration: none;
border:none!important;
transition: all 0.4s ease 0s!important;
-webkit-box-shadow: 0px 5px 20px -8px rgba(0,0,0,0.57)!important;
-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57)!important;
box-shadow: 5px 40px -10px rgba(0,0,0,0.57)!important;
}
#heading{
    font-family: 'Baloo 2', cursive;
}
#sketch_button:hover {
background: #434343!important;
letter-spacing: 1px;
-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
box-shadow: 5px 40px -10px rgba(0,0,0,0.57);
transition: all 0.4s ease 0s;
color:white!important;
}
@media only screen and (max-width: 1050px){
    #searchbox{
        width:500px;
    }
    #search-form-2{
        margin-top: 200px;
    }
}
@media only screen and (max-width: 655px){
    #searchbox{
        width:400px;
        display: block;
    }
    #search-form-2{
        margin-top: 200px;
    }
    #search-button{
        padding:10px;
        margin-top:10px;
    }
}
@media only screen and (max-width: 445px){
    #searchbox{
        width:300px;
        display: block;
        padding:13px;
    }
    #search-button{
        padding:10px;
        margin-top:10px;
        width:80px;
    }
}
}
@media only screen and (max-width: 320px){
    #searchbox{
        width:200px;
        display: block;
        padding:13px;
    }
    #search-button{
        padding:10px;
        margin-top:10px;
        width:80px;
    }
    #searchform{
        padding:20px;
    }
}
</style>
 

