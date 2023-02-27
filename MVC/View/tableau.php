<!DOCTYPE html>
<html lang="en">
<?php session_start();?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/assets/tableauStyle.css">
    
    <title>Document</title>
</head>

<body>

    <div class="parent">

        <div class="div1">
            <h1> La boîte à mauvais comportement </h1>
            <button> <img src="../View/assets/img/profilIcone.png" alt=""></button>
            <?= $_SESSION['login']->nom. ' ' . $_SESSION['login']->prenom;?>
        </div>







        <div class="div2">
            <table>
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Date de naissance</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($_SESSION['users'] as $user){?>
                <tr>
                    <td>
                        <?=$user->nom ?>
                    </td>
                    <td>
                        <?=$user->prenom ?>
                    </td>
                    <td>
                        <?=$user->email ?>
                    </td>
                    <td>
                        <?=$user->date_naissance ?>
                    </td>
                <tr>
                    <?php }?>
                <tbody>
            </table>
        </div>
        <div class="div3"> </div>
        <div class="div4"> </div>
    </div>


    <script type="text/javascript" src="./assets/js/accueilScript.js"></script>


</body>

</html>