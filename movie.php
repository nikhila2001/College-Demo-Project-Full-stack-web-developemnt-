
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

.download {
	position: absolute;
	box-shadow:inset 0px 1px 0px 0px #bbdaf7;
	background:linear-gradient(to bottom, #79bbff 5%, #378de5 100%);
	background-color:#79bbff;
	border-radius:6px;
	border:1px solid #84bbf3;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:25px;
	font-weight:bold;
	top:86%;
	left:2%;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #528ecc;
	width:20.5%;
	height: 10%;
}
	.download:hover {
	background:linear-gradient(to bottom, #378de5 5%, #79bbff 100%);
	background-color:#378de5;
}


.mv{
	position: absolute;
	background: black;
	margin: 0 auto;
	border: 3px outset skyblue;
	left:4.5%;
	top:100.5%;
	width: 90%;
	height: 90%;
	padding: 0;
	border:0;
}
.v{
	top: 25%;
	left:33%;
	border-radius: 14px;

	position: absolute;
	width:40%;
	height: 60%;
	border:2px solid white;
	padding: 0;

}
.i{
	position: absolute;
	top: 23%;
	left: 3%;
	width: 18%;
	height: 60%;
	border:5px solid white;
}
.trai{
	position: absolute;
	top:15%;
	color:white;
	font-family:sans-serif;
	left:48%;
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
            

            }.Register:hover{
                transform: scale(1.1);
                color:white;
            }
            .logo{
            	background-color: #232325;
            	width: 27%;
            	padding-right: 100%;
            	padding-left: 14%;
            	padding-top: 0%;
            	position: absolute;
            	top:0%;
            	left:0%;
            	height: 8%;
           }
           .thumb{
           	position: absolute;
           	
           	top:15%;
	color:white;
	font-family:sans-serif;
	left:54%;

           }
           .img{
                
                margin:1%;
                
                padding:0;
                border: 4px solid white;
                margin-left:4%;
                margin-top: 1%;
            }


            .img:hover{
                transform: scale(1.1);
                transition: all .5s;
                border-color: red;
                border-width:5px;
            }

            
            
</style>
<link rel="stylesheet" href="style1.css?1422585377">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

</head>
<body>
	
	<div>
		<h1 class = "trai">Trailer</h1>
	</div>
	<div class="logo">
		<img src="logo.jpg" height="100%" width="30%" >
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
		<div class="movie" id="m">
			<?php
			$con = mysqli_connect("localhost","root","","project");
			$m = $_GET['movie'];
			$query = mysqli_query($con,"SELECT * FROM images WHERE id='$m';");
			
			while($row = mysqli_fetch_array($query)){
				echo'<tr class="g">';
				echo  '<p style="color:red;padding:0;text-align:left center ;position:absolute;margin-top:-28.3%;margin-left:77%;font:arial;font-size: 23px;">' .$row[5]. '</p>';
				echo '</tr>';
				echo '<tr class="nm">';
				echo '<p style="color:white; padding:0;position:absolute; margin-top:-31.6%;margin-left:82%;font-family:sans-serif;font-size: 30px;">' .$row['name']. '</p>';
				echo '</tr>';
				echo "<video class='mv' height=200 width=400 controls poster='mthumb/$row[6]'>
				<source src='movies/$row[3]' type='video/mp4'> 
				</video>";
				echo "<video class='v' height=200 width=400 controls poster='vthumb/$row[7]'>
				<source src='trailerss/$row[4]' type='video/mp4'> 
				</video>";
				echo "<img src='images/$row[2]' class='i' id='imag1' width='200' height='300'>";

			
			
			
			
			
			
		}
		?>
	</div>
	
		<div>
		<button class="download" id="d">Download
			<i class="fas fa-angle-double-down"></i>
		</button>
	</div>
		
		
	



		
	</body>
	</html>       
        