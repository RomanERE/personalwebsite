<?php
header('Content-Type: application/json');

// Температура
$temp = shell_exec("vcgencmd measure_temp");
$temp = str_replace(['temp=', "'C\n"], '', $temp);

// RAM
$free = shell_exec("free -m");
$lines = explode("\n", $free);
$mem = preg_split('/\s+/', $lines[1]);
$ram_usage = round(($mem[2] / $mem[1]) * 100, 1);

// Uptime
$uptime = shell_exec("uptime -p");
$uptime = str_replace('up ', '', $uptime);

echo json_encode([
    'temp' => $temp . "°C",
    'ram' => $ram_usage . "%",
    'uptime' => $uptime
]);
?>