<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <style>
          body{
  margin-top: 1%;
    background-position:1%, right center;
    padding: 0;
    background-color:skyblue;
    background-image:url('bgg.jpg'),url('popbg.jpg'); 
    background-blend-mode:lighten;
    background-repeat: no-repeat;
    background-size: 45%;



}
          @import url(http://fonts.googleapis.com/css?family=Raleway);
              h2{
                width: 100%;
                background-color: #FEFFAD;
            padding: 28px 30px;
            margin: -10px -50px;
            text-align:center;
            border-radius: 8px 10px 0 0;
            }
            
              div.container{
              width: 70%;
              height: 90%;
              margin:-15% auto;
              font-family: 'Raleway', sans-serif;

              }
              div.main{
              width: 30%;
              padding: 12px 50px 25px;
              border: 3px solid pink;
              border-radius: 10px;
              font-family: raleway;
              float:left;
              margin-top:2%;
              margin-left:30%;
              background-color: transparent;

              }
              input[type=text],input[type=password]{
              width: 100%;
              height: 40%;
              padding: 3%;
              margin-bottom: 6%;
              margin-top: 6%;
              border: 2px solid #ccc;
              color: #4f4f4f;
              font-size: 86%;
              border-radius: 7px;
              margin-left: -5.5%;
              }
              label{
              margin-left: -4%;
              color: white;
              font-size: 104%;
              font-weight: bold;
              }
              .center{
              font-size:32%;
              }
              .note{
              color:red;
              }
              .valid{
              color:green;
              }
              .back{
              text-decoration: none;
              border: 1px solid rgb(0, 143, 255);
              background-color: rgb(0, 214, 255);
              padding: 3px 20px;
              border-radius: 2px;
              color: black;
              }
              input[type=button]{
              font-size: 16px;
              background: linear-gradient(skyblue, white);
              border: 1px solid #e5a900;
              color: black;
              font-weight: bold;
              cursor: pointer;
              width: 40%;
              border-radius: 10px;
              padding: 10px;
              outline:none;
              text-align: center;
              margin: 5%;
              margin-left: 30%;

              }
              input[type=button]:hover{
              background: linear-gradient(lightgreen 5%, white 100%);
              }
              button {
  background-color: powderblue;
  color: white;
  padding: 14px 12px;
  margin: 18px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  align-content: center;
}
        </style>
       
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">   
        <link href="/MyProject/Content/fontawesome-free-5.10.1-web/css/all.min.css" rel="stylesheet">

        </head>
        <body >
          
          <div class="main">
      <form  action="index.php" method="GET">
      <label>First Name :</label>
      <input type="text" name="Firstname" id="fname" placeholder="Enter here" required />
      <label>Last Name :</label>
      <input type="text" name="Secondname" id="sname" placeholder="Enter here" required />
      <label>Phone no: :</label>
      <input type="text" name="number"pattern="[1-9]{1}[0-9]{9}" title="Enter 10 digit mobile number"  id="no" placeholder="Enter here" required />
      <label>Email address (optional):</label>
      <input type="text" name="email" id="mailid" placeholder="Enter here" />
      <label>Password :</label>
      <input type="password" name="password" id="password" placeholder="Enter here" required/>
      <button type="submit">Register</button>
      </form>
    </div>

       
          </body>
    </html>
