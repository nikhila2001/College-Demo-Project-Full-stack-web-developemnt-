<?php
$con = mysqli_connect("localhost","root","","project");
$s = $_GET['search'];
$query = mysqli_query($con,"SELECT name,link FROM videos WHERE name LIKE '%$s%'; ");
$queryy = mysqli_query($con,"SELECT name,link,id FROM images WHERE name LIKE '%$s%'; ");
$queryyy = mysqli_query($con,"SELECT name,link,id FROM images WHERE name LIKE '%$s%'; ");


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
       
        <style>
            body {margin: 0;padding: 0;}
            welcome {
                font-size: 100px;
                color: black;
                text-align: center;
                margin: 200px auto;
                font-family: aria;
            }
            paragraph-text {
                
                color: red;
                font-family: cursive;
                font-size: 20px;
                text-align: center;

                
                
                
            }
            .home {
                padding:0;
                border:none;
                font-size: 20px;

                background-color: black;
                position: absolute;
                color:red;
                font-family: sans-serif;
                text-decoration:none;
                left: 65%;
                top:13.5%;
                margin-left: 25px 50px 70px;
            

            }
            .home:hover{
                transform: scale(1.1);
                color:white;
            }
            .movies {
                padding:0;
                font-size: 20px;
                border:none;
                background-color: black;
                position: absolute;
                color:red;
                font-family: sans-serif;
                text-decoration:none;
                left: 74.5%;
                top:13.5%;
                margin-left: 25px 50px 70px;
            

            }
            .movies:hover{
                transform: scale(1.1);
                color:white;
            }
            .latest {
                padding:0;
                font-size: 20px;
                border:none;
                background-color: black;
                position: absolute;
                color:red;
                font-family: sans-serif;
                text-decoration:none;
                left: 85%;
                top:13.5%;
                margin-left: 25px 50px 70px;
            

            }

            .latest:hover{
                transform: scale(1.1);
                color:white;
            }
            .Register {
                padding:0;
                border:none;
                font-size: 20px;

                background-color: black;
                position: absolute;
                color:red;
                font-family: sans-serif;
                text-decoration:none;
                left: 5%;
                top:13.5%;
                margin-left: 25px 50px 70px;
            

            }
            .Register:hover{
                transform: scale(1.1);
                color:white;
            }
            header{
             margin-left:30px;
             margin: 10px;
             position: absolute;
             top:0.5%;
             left:39.5%;
             text-align: center;
             font-family:serif;
             color:#ff0024;
             font-size: 40px;
             transition: all 0.5s;
         }
         /*.search{
            margin:2px;
            top:3%;
            left:20%;
            margin-left: 5px;
            
            border-radius: 50px;
            background: white;
            position: relative;
            border:none;
            height:40px;
        }*/
       
            
            embed{
                margin: 20px;

                

            }
            .play{
                position: absolute;
                margin-top: 15%; 
                margin-left:50px;
                color:#ffffff;
                background:linear-gradient(to bottom, #3d94f6 5%, #1e62d0 100%);
                background-color:#3d94f6;
                border:none;
                
                font-family:Arial;
                font-size:25px;
               font-weight:bold;
               padding:6px 24px;
               text-decoration:none;
               text-shadow:0px 1px 0px #b23e35;
            }
            .play:hover {
                background:linear-gradient(to bottom, #1e62d0 5%, #3d94f6 100%);
                background-color:#1e62d0;
                }
            .play:active {
                position:absolute;
                
            }
            img{
                
                margin:1%;
                
                padding:0;
                border: 4px solid white;
                margin-left:4%;
                margin-top: 2%;
            }


            img:hover{
                transform: scale(1.1);
                transition: all .5s;
                border-color: red;
                border-width:5px;
            }

            
            
        </style>
        <link rel="stylesheet" type="text/css" href="style.css">
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>



    <body>
        <!--<div class = "splash">
            <h1 class = "fadeout"> Welcome </h1>
        </div>-->
        <header class = "header"> Movie Stream </header>
        <div class="MP">
           <form method="GET" action="index.php">
            <button class = "home" id="h">Home</button>
            </form>
            <form method="GET" action="response.php">
                 <button  name ="MOVIES" type="submit" class = "movies" id="M">Movies</button>
            </form>
        
       
            <button class = "latest" id="L">Latest</button>
            <form method="GET" action="register.php">
                 <button   class = "Register" id="R">Register/login</button>
            </form>
        
        </div>

        <div class="search" id="srch">
                    <form method="GET" action="index.php">
                    <input class="search-text" id="srchtxt" type="text" name="search" placeholder="search here....">
                    <button type="submit"  class="search-btn" id="btn">
                        <i class="fa fa-search"></i>
                    </button>
                     
        

                    
                    
                </form>

                <script>
                     $(document).ready(function() {
                        $('#btn').click(function(){
                            alert('ok');

                        });

                        
                        $('#srchtxt').hover(function(){
                            $(this).css("margin-left", "20px");
                            

                        });
                        $('#srchtxt').mouseleave(function(){
                             $(this).css("margin-left", "12px");

                        });

                        
                    });
                       
                     
                        
                       
                       

                       
                
                </script>
               

                
        
            
        </div>
        <div class =  "images" id="img" >
                <?php
                while($row=mysqli_fetch_array($queryy)){
                    $m=$row[1];
                    echo "<a href='movie.php?movie=$row[2]'><img src='images/$m' id='image1' width='200' height='300'></a>";
                    
                }
                ?>
        </div>
        
      
       
        
        
        
        <script src="script.js"></script>
        
        
    </body>
</html>

