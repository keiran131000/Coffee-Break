<meta http-equiv="refresh" content="2"> 

<link href="https://fonts.googleapis.com/css?family=Fascinate+Inline" rel="stylesheet">

<style>
    body{
        background-color: black
    }
    h1{
        position: absolute;
        font-family: 'Fascinate Inline', cursive;
        color:white;
        font-style: oblique;
        font-size: 30px;
        margin-left: 10px;
        background: blue;
        padding-top: 50px;
        padding-right: 30px;
        padding-bottom: 30px;
        padding-left: 30px;
        padding-top: 30px;
        margin-bottom: 10px;
        opacity: 0.7;
        text-align: center;
    }
    .title{
        margin: auto;
        display:block;
        width: 40%;
    }
    .character{
        height:160px;
        width:180px;
        margin-left: 10px;
        border-left-color: black;
        border-left-style: solid;
    }
    .bar{
        background-image:url(Bars/back%20div.png);
        border-bottom: 6px solid blue;
        border-top: 6px solid blue;
        color: darkblue;
        padding-bottom: 10px;
        padding-top: 10px;
        background-position: top;
    }
</style>





<?php
$servername = "sundog.no-ip.org";
$username = "hackathon";
$password = "hackathon2017";
$dbname = "texecom";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT COUNT(*) AS `bob` FROM `ricochet` WHERE `ExpanderId` = 1 AND `id` > 3925460 AND (`DevNo` = 8 OR `DevNo` = 12 OR `DevNo` = 11 OR `DevNo` = 21) ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    $bob = $row['bob'];
}
$sql = "SELECT COUNT(*) as `dave` FROM `ricochet` WHERE `DevNo`= 25 AND `ExpanderId` = 1 AND `id` > 3925460 ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    $dave = $row['dave'];
}
$total = ($dave / $bob ) * 100
?>


<?php    
    $sql = "SELECT COUNT(*) as `dave2` FROM `ricochet` WHERE `DevNo`= 11 AND `ExpanderId` = 1 AND `id` > 3925460 ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    $dave2 = $row['dave2'];
}
$total2 = ($dave2 / $bob) * 100 
?>

<?php    
    $sql = "SELECT COUNT(*) as `dave3` FROM `ricochet` WHERE `DevNo`= 27 AND `ExpanderId` = 1 AND `id` > 3925460 ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    $dave3 = $row['dave3'];
}
$total3 = ($dave3 / $bob)  * 100
?>

<?php    
    $sql = "SELECT COUNT(*) as `dave4` FROM `ricochet` WHERE `DevNo`= 8 AND `ExpanderId` = 1 AND `id` > 3925460  ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    $dave4 = $row['dave4'];
}
$total4 = ($dave4 / $bob) * 100    
?>

<?php    
    $sql = "SELECT COUNT(*) as `brian` FROM `ricochet` WHERE `DevNo` = 18 AND `id` > 3925460 AND `Active` = 1 AND `ExpanderId` = 1 ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    $brian = $row['brian'];
}
?>

<html>


    <head>
        <h1>
            Unauthorised Access 

            <?php echo $brian; ?> times


        </h1>
        <img class = "title" src = "/Pac/Title.png">

    </head>


    <body style="background:black">
        <!--Set Bars-->
        <div class = "bar" id = "Bar 1" >



            <h1 id = "Marketing"> </h1>
            <img src = "/Ghosts/blue.gif" style="margin-left:80%; margin-right:0px;position:absolute; width:180px;height:180px;" id="ghost1">

            <img class = "Character" id = "1" style="Margin-Left:<?php echo $total; ?>%" src = "/Pac/giphy-pacman.gif">

        </div>



        <div class = "bar" id = "Bar 2">
            <h1 id = "Tech"> </h1>
            <img src = "/Ghosts/red.gif" style="margin-left:80%; margin-right:0px;position:absolute; width:180px;height:180px;" id="ghost2">
            <img class = "Character" id = "2" style="Margin-Left:<?php echo $total2; ?>%" src = "/Pac/giphy-pacman.gif">

        </div>

        <div class = "bar" id = "Bar 3">
            <h1 id = "Special"> </h1>
            <img src = "/Ghosts/orange.gif" style="margin-left:80%; margin-right:0px;position:absolute; width:180px;height:180px;" id="ghost3">
            <img class = "Character" id = "3" style="Margin-Left:<?php echo $total3; ?>% ; border-left(solid)" src = "/Pac/giphy-pacman.gif">

        </div>

        <div class = "bar" id = "Bar 4">
            <h1 id = "Finance"> </h1>
            <img src = "/Ghosts/pink.gif" style="margin-left:80%; margin-right:0px;position:absolute; width:180px;height:180px;" id="ghost4">
            <img class = "Character" id = "4" style="Margin-Left:<?php echo $total4; ?>%"  src = "/Pac/giphy-pacman.gif">

        </div>



    </body>



    <script>    
        //remove pacman when hits ghost
        if (parseInt(<?php echo $total; ?>) > 80 ){
            document.getElementById('1').style.display = 'none';
            document.getElementById('1').style.visibility = 'hidden';
        }
        if (parseInt(<?php echo $total2; ?>) > 80 ){
            document.getElementById('2').style.display = 'none';
            document.getElementById('2').style.visibility = 'hidden';
        }
        if (parseInt(<?php echo $total3; ?>) > 80 ){
            document.getElementById('3').style.display = 'none';
            document.getElementById('3').style.visibility = 'hidden';
        }
        if (parseInt(<?php echo $total4; ?>) > 80 ){
            document.getElementById('4').style.display = 'none';
            document.getElementById('4').style.visibility = 'hidden';
        }
    </script>


    <!-- Background image -->

    <script>
    </script>

    <!--Translate-->
    <script>
        if (parseInt(<?php echo $total; ?>) > 10 ){
            document.getElementById("Bar 1").style.backgroundImage = "url('/Bars/bar2.png')";
        }
        if (parseInt(<?php echo $total; ?>) > 25 ){
            document.getElementById("Bar 1").style.backgroundImage = "url('/Bars/bar3.png')";
        }
        if (parseInt(<?php echo $total; ?>) > 47 ){
            document.getElementById("Bar 1").style.backgroundImage = "url('/Bars/bar4.png')";
        }
        if (parseInt(<?php echo $total; ?>) > 60 ){
            document.getElementById("Bar 1").style.backgroundImage = "url('/Bars/bar5.png')";
        }
        if (parseInt(<?php echo $total; ?>) > 71 ){
            document.getElementById("Bar 1").style.backgroundImage = "url('/Bars/bar6.png')";
        }
        if (parseInt(<?php echo $total; ?>) > 80 ){
            document.getElementById("Bar 1").style.backgroundImage = "url('/Bars/bar6.png')";
        }
        if (parseInt(<?php echo $total2; ?>) > 10 ){
            document.getElementById("Bar 2").style.backgroundImage = "url('/Bars/bar2.png')";
        }
        if (parseInt(<?php echo $total2; ?>) > 25 ){
            document.getElementById("Bar 2").style.backgroundImage = "url('/Bars/bar3.png')";
        }
        if (parseInt(<?php echo $total2; ?>) > 47 ){
            document.getElementById("Bar 2").style.backgroundImage = "url('/Bars/bar4.png')";
        }
        if (parseInt(<?php echo $total2; ?>) > 60 ){
            document.getElementById("Bar 2").style.backgroundImage = "url('/Bars/bar5.png')";
        }
        if (parseInt(<?php echo $total2; ?>) > 71 ){
            document.getElementById("Bar 2").style.backgroundImage = "url('/Bars/bar6.png')";
        }
        if (parseInt(<?php echo $total2; ?>) > 80 ){
            document.getElementById("Bar 2").style.backgroundImage = "url('/Bars/bar6.png')";
        }
        if (parseInt(<?php echo $total3; ?>) > 10 ){
            document.getElementById("Bar 3").style.backgroundImage = "url('/Bars/bar2.png')";
        }
        if (parseInt(<?php echo $total3; ?>) > 25 ){
            document.getElementById("Bar 3").style.backgroundImage = "url('/Bars/bar3.png')";
        }
        if (parseInt(<?php echo $total3; ?>) > 47 ){
            document.getElementById("Bar 3").style.backgroundImage = "url('/Bars/bar4.png')";
        }
        if (parseInt(<?php echo $total3; ?>) > 60 ){
            document.getElementById("Bar 3").style.backgroundImage = "url('/Bars/bar5.png')";
        }
        if (parseInt(<?php echo $total3; ?>) > 71 ){
            document.getElementById("Bar 3").style.backgroundImage = "url('/Bars/bar6.png')";
        }
        if (parseInt(<?php echo $total3; ?>) > 80 ){
            document.getElementById("Bar 3").style.backgroundImage = "url('/Bars/bar6.png')";
        }
        if (parseInt(<?php echo $total4; ?>) > 10 ){
            document.getElementById("Bar 4").style.backgroundImage = "url('/Bars/bar2.png')";
        }
        if (parseInt(<?php echo $total4; ?>) > 25 ){
            document.getElementById("Bar 4").style.backgroundImage = "url('/Bars/bar3.png')";
        }
        if (parseInt(<?php echo $total4; ?>) > 47 ){
            document.getElementById("Bar 4").style.backgroundImage = "url('/Bars/bar4.png')";
        }
        if (parseInt(<?php echo $total4; ?>) > 60 ){
            document.getElementById("Bar 4").style.backgroundImage = "url('/Bars/bar5.png')";
        }
        if (parseInt(<?php echo $total4; ?>) > 71 ){
            document.getElementById("Bar 4").style.backgroundImage = "url('/Bars/bar6.png')";
        }
        if (parseInt(<?php echo $total4; ?>) > 80 ){
            document.getElementById("Bar 4").style.backgroundImage = "url('/Bars/bar6.png')";
        }
        document.getElementById("Marketing").innerHTML = " Marketing </br> <?php echo substr($total,0,2); ?>%" ;
        document.getElementById("Tech").innerHTML = " Tech Support </br> <?php echo substr($total2,0,2); ?>%" ;
        document.getElementById("Special").innerHTML = " Special Projects </br> <?php echo substr($total3,0,2); ?>%" ;
        document.getElementById("Finance").innerHTML = " Finance </br> <?php echo substr($total4,0,2); ?>%" ;
    </script>


</html>
