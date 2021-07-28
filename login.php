<?php
setcookie("email","",time()-3600);
echo $_COOKIE["email"];
    $link=mysqli_connect("sdb-f.hosting.stackcp.net","user01-3138347707","Hazel@123","user01-3138347707");
   if (mysqli_connect_error()){
    die("you fucked up");
   }
   if($_POST){
    $email=$_POST['name'];
    $password=$_POST['age'];    
    //SELECT * FROM login_details WHERE username = ? AND password = ?
       $query="SELECT 'email' FROM users where email='".mysqli_real_escape_string($link,$email)."' AND password='".mysqli_real_escape_string($link,$password)."'";
        $result=mysqli_query($link,$query);
            if(mysqli_num_rows($result) > 0){
              
                setcookie("email",$email,time()+3600);
                header("Location: diary.php");
            }
        
       else{
           echo '<script>alert("Either Register user or check your email and password")</script>';
       }
       
       
       
   }
    ?>
<html>
    <head>
        <title>
        Login Page
        </title>
        
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <style type="text/css">
          h1{
              padding-top: 5%;
              color: darkblue;
              font-size: 350%;
              font-family: sans-serif;
                font-weight: normal;
                font-family: 'Ultra', sans-serif;   
                line-height: 42px;
                text-transform: uppercase;
                text-shadow: 0 2px white, 0 3px #777;
          }
          #b{
            border: 10px solid #000000;
            width:750px;
            background-color:#fff;
        }

        @media only screen and
        (max-width : 1249px ) {

            #b{
                width:100%;
            }

        } 
          .why{
              padding: 3%;
          }
          .th{
              margin-bottom: 1%;
              margin-left: 3%;
          }
          .th2{
              float: left;
              margin-bottom: 2%;
              margin-left: 3%;
          }
          body{
            background-image: url('https://media1.giphy.com/media/hsTrTsvffZKis7vapS/giphy.gif?cid=ecf05e474ksmh6p1weq5xvx2xe0fzm99ecu0pqjohq0fc98s&rid=giphy.gif&ct=g');
            background-size: cover;    
            height: 100vh;
            padding:0;
            margin:0;
          }
          inputtt{
              color: crimson;
              text-decoration-color: crimson;
              text-decoration-style: solid;
          }
        </style>
  
    </head>
   <body>     
                <div class="container h-100" >
                    <div  class="row h-100 justify-content-center align-items-center">
                        <div id="b">
            <form method="post"  >

                  <div class="form-group why">
                      <h1 class="text-center">SECRET DIARY</h1>
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control inputtt" name = "name" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group why">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name = "age" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-primary th">Submit</button>
                    
                </form>
                        <button id="myButton" class="btn btn-dark th2">Signup</button>
                            </div>
                    </div>
                    </div>
                
                    <script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "index.php";
       
    };
       </script>
    </body>
</html>