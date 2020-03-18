<?php session_start()?>
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
<br/>
<br/>
<br/>
<br/>
<br/>
     <div id="feature"class="container d-flex"style=
     ";justify-content:center;  border: 1px solid #c5c5c5;
      -webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
     -moz-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
      box-shadow: 0 3px 8px rgba(0, 0, 0, .25);">
        
                     <?php

$value =  $_POST['submit'];
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = $_SESSION['db_name_user'] ;
$connec = new mysqli($servername,$username,$password,$dbname);
$sql = "SELECT * FROM notes WHERE topic= '$value'";
$r = $connec->query($sql);
while($row = $r->fetch_assoc()){
    echo '';
    echo '<div class="row d-flex"style="justify-content:center;width:100%;">';
                echo '<div class="col-lg-6 col-md-6 d-flex" style="justify-content: center;align-content: center;align-items: center;padding:20px;">';
                                   echo '<div id="note">';
                                       echo '<h1 id="note_subhead"><b>' .$row['subtopic']. '<b></h1>';
                                    echo '<p id="note-main">' .$row['note'].'</p>';
                                   echo' <h6 id="note-main"><b>' .$row["date"]. + '</b>23-23-2323</h6>';
                                    echo '<h6 id="note-main"><b>'.$row['time'].'</b></h6>';
                                   echo'</div>';
                 echo'</div>';
}
?>
</div>
</body>

</html>
<style>
#note{
    text-align: center;
    width:100%;
    
}  
#note_subhead{
    display: block;
    font-family: 'Baloo 2', cursive;
    text-transform: uppercase;

}
#note-main{
    margin-top:20px;
display: block;
font-family: 'Baloo 2', cursive;

}</style>