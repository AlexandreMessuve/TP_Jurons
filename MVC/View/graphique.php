<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/graphiqueStyle.css">
    <title>Graphique</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<?php session_start(); ?>

<?php 
$_SESSION["requete"];

foreach($_SESSION["requete"] as $data){
    $prenom[] = $data['prenom'];
    $totalPrix[] = $data['totalPrix'];
}


?>

<body>
<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: <?php echo json_encode($prenom)?>,
      datasets: [{
        label: '# of Votes',
        data: <?php echo json_encode($totalPrix)?>,
        borderWidth: 1
      }]
    },
    options: {
      scales: {

      }
    }
  });
</script>
 
</body>
</head>