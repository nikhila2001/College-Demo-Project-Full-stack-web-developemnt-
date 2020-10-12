<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Movie Page</title>
	
<style>
	body{
	margin-top: 40%;
    background-position:1%, right center;
    padding: 0;
    background-color:skyblue;
    background-image:url('bgg.jpg'),url('popbg.jpg'); 
    background-blend-mode:lighten;
    background-repeat: no-repeat;
    background-size: 45%;



}


input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  font-family: arial;
}


button {
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}


button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
.registerpage {
    position: absolute;
    top:25%;
    left:32%;
    padding: 0%;
    width:30%;
}



</style>
</head>
<body>
  <div class="registericon">
    
    <div class="registerpage" id="rp">
        <form action="index.php" method="GET">
        <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit" >Login</button>
      <div class="container" style="background-color:#f1f1f1">
      
      <span class="psw">New User? Register<a href="register1.php"> Here</a></span>
    </div>
</form>
      
      </div> 
</html>
