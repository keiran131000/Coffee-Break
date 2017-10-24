<!--<meta http-equiv="refresh" content="20"> -->

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
        font-size: 50px;
        margin-left: 10px;
        background: blue;
        padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 30px;
    padding-left: 30px;
        padding-top: 30px;
        margin-bottom: 10px
        
        
        
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
        
        background-image:url(back%20div.png);
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

$sql = "SELECT count(*) as `bob` FROM `ricochet` WHERE `ExpanderId` = 1 AND `id` > 3780000 ";

$result = $conn->query($sql);



while($row = $result->fetch_assoc()){
    $bob = $row['bob'];
}





$sql = "SELECT COUNT(*) as `dave` FROM `ricochet` WHERE `DevNo`= 11 AND `ExpanderId` = 1 AND `id` > 3780000 ";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    $dave = $row['dave'];
}

$total = ($bob / $dave) 
?>


<?php    
    $sql = "SELECT COUNT(*) as `dave2` FROM `ricochet` WHERE `DevNo`= 27 AND `ExpanderId` = 1 AND `id` > 3780000 ";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    $dave2 = $row['dave2'];
}

$total2 = ($bob / $dave2)    
?>

<?php    
    $sql = "SELECT COUNT(*) as `dave3` FROM `ricochet` WHERE `DevNo`= 17 AND `ExpanderId` = 1 AND `id` > 3780000 ";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    $dave3 = $row['dave3'];
}

$total3 = ($bob / $dave3)    
?>

<?php    
    $sql = "SELECT COUNT(*) as `dave4` FROM `ricochet` WHERE `DevNo`= 25 AND `ExpanderId` = 1 AND `id` > 3780000  ";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    $dave4 = $row['dave4'];
}

$total4 = ($bob / $dave4)    
?>


<html>


    <head>

        <img class = "title" src = "Title.png">

    </head>


    <body style="background:black">
<!--Set Bars-->
        <div class = "bar" id = "Bar 1" >
            <h1>Marketing</h1>
            <img src = "blue.gif" style="margin-left:80%; margin-right:0px;position:absolute; width:180px;height:180px;" id="ghost1">
            
            <img class = "Character" id = "1" style="Margin-Left:<?php echo $total; ?>%" src = "giphy-pacman.gif">

        </div>



        <div class = "bar" id = "Bar 2">
            <h1>Marketing</h1>
            <img src = "red.gif" style="margin-left:80%; margin-right:0px;position:absolute; width:180px;height:180px;" id="ghost2">
            <img class = "Character" id = "2" style="Margin-Left:<?php echo $total2; ?>%" src = "giphy-pacman.gif">

        </div>

        <div class = "bar" id = "Bar 3">
            <h1>Marketing</h1>
            <img src = "orange.gif" style="margin-left:80%; margin-right:0px;position:absolute; width:180px;height:180px;" id="ghost3">
            <img class = "Character" id = "3" style="Margin-Left:<?php echo $total3; ?>% ; border-left(solid)" src = "giphy-pacman.gif">

        </div>

        <div class = "bar" id = "Bar 4">
            <h1>Marketing</h1>
            <img src = "pink.gif" style="margin-left:80%; margin-right:0px;position:absolute; width:180px;height:180px;" id="ghost4">
            <img class = "Character" id = "4" style="Margin-Left:<?php echo $total4; ?>%"  src = "giphy-pacman.gif">

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
        
 if (parseInt(<?php echo $total4; ?>) > 80 ){
     document.body.style.backgroundImage = "url('bar6.png')";
           
            
        }
    
</script>
</html>








