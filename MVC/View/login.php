<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../View/assets/css/styleLogin.css">
     <title>Login</title>
</head>
<body>
     
     <div class = "container">

          <h1> Please Login </h1>

          <form method="post" action="../Controller/executeLogin.php">
               <div class="form-control">
                    <input type="text" name="login" required />
                    <label class="labelhidden"> Email </label>
               </div>
               <div class="form-control">
                    <input type="password" name="password" required>
                    <label> Password </label>
               </div>
               <button class="btn"> Login </button>
               <p class="text"> Dont have an account ? <a href="#">Register</a> </p>


               
          </form>

     </div>

     <script src="../View/assets/js/loginScript.js"></script>
</body>
</html>


<!-- <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Login</title>  
               
      </head>  
<body>  





           <br />  
           <div class="container" style="width:500px;">  

                <h3> LOGIN </h3> <br />  
                <form method="post" action="../Controller/executeLogin.php">  
                     <label>Username</label>  
                     <input type="text" name="login" class="form-control" />  
                     <br />  
                     <label>Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" class="btn btn-info" value="Connexion" />
                </form>  
           </div>  
           <br />  
</body>  
 </html>   -->