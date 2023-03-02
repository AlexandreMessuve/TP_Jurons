<?php
session_start();

$json = [];

$json['currentUser'] = $_SESSION['currentUser'];

echo json_encode($json);
