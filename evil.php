<?php
// Obtén los datos de la solicitud
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-Type: application/json");
header("Location: http://metadata.google.internal/computeMetadata/v1beta1/project/attributes/ssh-keys?alt=json"); //IPV6 Compressed
?>
