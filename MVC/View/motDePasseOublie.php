<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/assets/css/styleLogin.css">
    <title>MDP oublié</title>
</head>
<body>
    
<img src="../View/assets/img/pixouInscription.png" alt="" class="imgInsc" width="300px" class="container">


        <div>
            

            <form method="post" class="bodyForm" action="../Controller/executeMdpOublie.php">

                <h1> Mot de passe oublié </h1>
                <p> Nous allons vous envoyer un nouveau mot de passe par mail, </br> nous vous conseillons de le changer ensuite dans votre panel profil. </p>
               
                <div class="input-group">
                    <input type="text" name="login" autocomplete="off" class="input" required />
                    <label class="user-label"> Login </label>
                </div>
                
                <div class="input-group">
                    <input type="email" name="email" autocomplete="off" class="input" required />
                    <label class="user-label"> Email </label>
                </div>


                <button class="btn"> Envoyer un nouveau mot de passe ! </button>

            </form>

         </div> 

</body>
</html>



