<?php
$apiUrl = 'https://api.open-meteo.com/v1/forecast?latitude=40.2842&longitude=-3.7942&daily=temperature_2m_max,temperature_2m_min&timezone=Europe/Madrid&forecast_days=3';

$response = file_get_contents($apiUrl);

if ($response === FALSE) {
    die('Error al obtener los datos del tiempo.');
}

$data = json_decode($response, true);

if ($data === NULL) {
    die('Error al decodificar los datos del tiempo.');
}

echo "<h1>Pronóstico del tiempo para Fuenlabrada en los próximos 3 días</h1>";

for ($i = 0; $i < 3; $i++) {
    echo "Día " . ($i + 1) . ":";
    echo " Temperatura Máxima: " . $data['daily']['temperature_2m_max'][$i] . "°C";
    echo " Temperatura Mínima: " . $data['daily']['temperature_2m_min'][$i] . "°C<br>";
}
?>


