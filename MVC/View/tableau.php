<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/assets/css/tableauStyle.css">
    
    <title>Document</title>
</head>

<body>

    <div class="parent">

        <div class="div1">
            <h1> La boîte à mauvais comportement </h1>
            <button> <img src="../View/assets/img/profilIcone.png" alt=""></button>
            <p id="nomPrenom"></p>
            <button id="btn">AdminPanel</button>
            <button id="btn2" onclick="logout()">Logout</button>
        </div>

        <div class="div2">
            <table>
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Petit jurons</th>
                    <th>Gros jurons</th>
                    <th>Rot</th>
                    <th>Geste obscène</th>
                    <th>Retard</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody id="viewJurons">
                </tbody>
            </table>
        </div>
        <div class="div3" id="div3">
            <form id="insertPena">
                <label for="select">Selectionné la personne que vous voulez balancer : </label>
                <select id="select" name="loginCommettre">
                    <option value="" selected> Choisir un utilisateur</option>


                </select>
                <br/>
                <select name="codeInfraction">
                    <option value="" selected>Choisir une infraction</option>
                    <option value="code_2">Petit juron</option>
                    <option value="code_3">Gros juron</option>
                    <option value="code_4">Rot</option>
                    <option value="code_5">Geste deplacé</option>
                    <option value="code_1">Retard</option>
                </select>

                <input type="submit" value="valider" >
            </form>
        </div>
        <div class="div4"> </div>
    </div>

    <script
            src="https://code.jquery.com/jquery-3.6.3.min.js"
            integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/viewTabInfraction.js"></script>
    <script type="text/javascript" src="assets/js/functions.js" onload="insertPenal()"></script>


</body>

</html>