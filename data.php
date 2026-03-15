<?php
header('Content-Type: application/json');

$temp_raw = shell_exec("vcgencmd measure_temp | egrep -o '[0-9.]+'");
$temp = trim($temp_raw) ? trim($temp_raw) . "°C" : "--°C";

$ram_raw = shell_exec("free | grep Mem | awk '{print int($3/$2 * 100)}'");
$ram = trim($ram_raw) ? trim($ram_raw) . "%" : "--%";

$uptime_raw = shell_exec("uptime -p");
$uptime = trim(str_replace('up ', '', $uptime_raw));

$visitors_raw = shell_exec("awk '{print $1}' /var/log/nginx/access.log | sort | uniq | wc -l");
$visitors = trim($visitors_raw) ?: "0";

$connections_raw = shell_exec("ss -tn state established | wc -l");
$connections = (int)trim($connections_raw) > 0 ? (int)trim($connections_raw) - 1 : 0;

echo json_encode([
    'temp' => $temp,
    'ram' => $ram,
    'uptime' => $uptime,
    'visitors' => $visitors,
    'connections' => $connections
]);
?>