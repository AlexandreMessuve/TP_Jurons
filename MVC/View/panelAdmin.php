<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../View/assets/css/tableauStyle.css">

    <title>Document</title>
</head>

<body onload="viewTabCommettre()">

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
                <th>Infraction</th>
                <th>Login</th>
                <th>Balance</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody id="viewCommettre">
            </tbody>
        </table>
    </div>
    <div class="div3" id="div3">
    </div>
    <div class="div4"> </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
<script
    src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
    crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/functions.js"></script>


</body>

</html>

