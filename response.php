
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Movie Page</title>
	
<style>
	body{
	margin-top: 40%;
    background-position:18% 50%;
    padding: 0;
    background-color: black;
    background-image:url('bgg.jpg'); 
    background-color : transparent;
    background-blend-mode:hard-light;
    background-repeat: no-repeat;
    background-color:black;
    background-size: 45%;
}
#image1{
                
                margin:1%;
                
                padding:0;
                border: 4px solid white;
                margin-left:4%;
                margin-top: 1%;
            }


            #image1:hover{
                transform: scale(1.1);
                transition: all .5s;
                border-color: red;
                border-width:5px;
            }
.home {
                padding:0;
                border:none;
                background-color:#232325;
                font-size: 20px;
               position: absolute;
                color:red;
                font-family: sans-serif;
                text-decoration:none;
                left: 65%;
                top:3%;
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
                background-color: #232325;
                position: absolute;
                color:red;
                font-family: sans-serif;
                text-decoration:none;
                left: 74.5%;
                top:3%;
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
                background-color:#232325;
               
                position: absolute;
                color:red;
                font-family: sans-serif;
                text-decoration:none;
                left: 85%;
                top:3%;
                margin-left: 25px 50px 70px;
            

            }

            .latest:hover{
                transform: scale(1.1);
                color:white;
            }
            .Register {
                padding:0;
                border:none;
                background-color:#232325;
                font-size: 20px;
               position: absolute;
                color:red;
                font-family: sans-serif;
                text-decoration:none;
                left: 5%;
                top:3%;
                margin-left: 25px 50px 70px;
            

            }
            .Register:hover{
                transform: scale(1.1);
                color:white;
            }
            
            .logo{
               background-color: #232325;
                width: 140%;
                padding-right: 100%;
                padding-left: 14%;
                padding-top: 0%;
                position: absolute;
                top:0%;
                left:0%;
                height: 8%;
            }
            

          
</style>
<link rel="stylesheet" href="style.css?1422585377">
 
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>
<body>
	<div class="logo" >
		<img src="logo.jpg" height="100%" width="30%">
	</div>
	<div class="border">
		<form method="GET" action="index.php">
		    <button class = "home" id="h">Home</button>
		</form>
		<form method="GET" action="response.php">
            <button name="MOVIES" class = "movies" id="M">Movies</button>
        </form>
            <button class = "latest" id="L">Latest</button>
            <form method="GET" action="register.php">
		    <button class = "Register" id="R">Register/login</button>
		</form>
    </div>
<?php
$con = mysqli_connect("localhost","root","","project");

$query = mysqli_query($con,"SELECT * FROM images WHERE ;");
$queryy = mysqli_query($con,"SELECT name,link,id FROM images ; ");

?>
<?php
while($row=mysqli_fetch_array($queryy)){
	if(isset($_GET['MOVIES'])){
				$MOVIES=$_GET['MOVIES'];
				 $MOVIES=$row[2];
	$MOVIES=$row[1];
	
	echo "<a href='movie.php?movie=$row[2]'><img src='images/$MOVIES' id='image1' width='200' height='300'></a>";
	
	
}
}
?>
</body>
</html>

	


